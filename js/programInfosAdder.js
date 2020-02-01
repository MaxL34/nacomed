var programInfos = {
    programForm: $('#program-form'),
    delButton: $('#delProg'),
    yesModalBtn: $('#yes'),
    noModalBtn: $('#no'),
    selected: {},
    monthElt: $('#month'),
    weekElt: $('#week'),
    mission: $('#mission'),
    detailsMission: $('#details-mission'),
    location: $('#location'),
    availableBeds: $('#available-beds'),
    comments: $('#comments'),
    modalProg: $('#modal_prog'),
    modalText: $('#modal_text'),
    spanClose: $('.close'),

    init: function() {
        var self = this;

        var firstSelection = function() {
            self.selected.month = self.monthElt.find(':selected').val();
            self.selected.week = self.weekElt.find(':selected').val();

            $.ajax({
                url: './index.php?action=listProgInfos',
                type: 'POST',
                data: 'month=' + self.selected.month + '&week=' + self.selected.week,
                dataType: 'json',
                success: function(data) {
                    console.log(data[0]);
                    self.mission.val(data[0]);
                    self.detailsMission.val(data[1]);
                    self.location.val(data[2]);
                    self.availableBeds.val(data[3]);
                    self.comments.val(data[4]);

                }
            });
        }
        firstSelection();

        $(document).click(function(event) { 
            if(!$(event.target).closest(self.modal).length) {
                self.modalProg.hide();
                self.modalProg.stop(true, true).fadeOut();
            } 
        });

        self.monthElt.on('change', function() {
            self.selected.month = $(this).find(':selected').val();
            self.checkSelection();
        });

        self.weekElt.on('change', function() {
            self.selected.week = $(this).find(':selected').val();
            self.checkSelection();
        });

        self.delButton.on('click', function(e) {
            e.stopPropagation();
            e.preventDefault();

            self.selected.month = self.monthElt.find(':selected').val();
            self.selected.week = self.weekElt.find(':selected').val();

            self.modalText.text('Voulez-vous vraiment supprimer toutes ces informations (mois : ' + self.selected.month + ' semaine n° ' + self.selected.week + ') ?');            self.modalProg.show();

            self.yesModalBtn.show();
            self.noModalBtn.show();

            self.spanClose.click(function() {
                self.modalProg.hide();
            });
            
            self.yesModalBtn.on('click', function() {

                $.ajax({
                    url: './index.php?action=delProg',
                    type: 'POST',
                    data: 'month=' + self.selected.month + '&week=' + self.selected.week,
                    dataType: 'text',
                    success: function(data) {
                        console.log(data);
                        if (data == 'success') {
                            self.yesModalBtn.hide();
                            self.noModalBtn.hide();
                            self.modalText.text('Les informations du programme ont bien été supprimées.');
                            self.modalProg.show();
                            self.modalProg.fadeOut(4000, function() {
                                self.modalProg.hide();
                            });
                        } else {
                            console.log('erreur');
                        }
                    }
                });
            });

            self.noModalBtn.on('click', function() {
                self.yesModalBtn.hide();
                self.noModalBtn.hide();
                self.modalText.text('Les informations n\'ont pas été supprimées.');
                self.modalProg.show();
                self.modalProg.fadeOut(4000, function() {
                    self.modalProg.hide();
                });
            });

        });

        self.programForm.on('submit', function(e) {
            e.preventDefault(); 

            $.ajax({
                url: './index.php?action=addProgInfos',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
                dataType: 'text',
                success: function(data) {
                    switch (data) {
                        case 'missing_infos':
                            self.yesModalBtn.hide();
                            self.noModalBtn.hide();
                            self.modalText.text('Attention, vous n\'avez rentré aucune information');
                            self.modalProg.show();
                            self.modalProg.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalProg.hide();
                            });
                        break;

                        default: 
                            self.yesModalBtn.hide();
                            self.noModalBtn.hide();
                            self.modalText.text('Les informations ont bien été ajoutées');
                            self.modalProg.show();
                            self.modalProg.fadeOut(4000, function() {
                                self.modalText.text('');
                                self.modalProg.hide();
                            });
                    }
                }
            });
                    
        });

    },

    checkSelection: function() {
        var self = this;
        if (!!this.selected.month && !!this.selected.week) {
            console.log('ready to AJAX');

            $.ajax({
                url: './index.php?action=listProgInfos',
                type: 'POST',
                data: 'month=' + this.selected.month + '&week=' + this.selected.week,
                dataType: 'json',
                success: function(data) {
                    console.log(data[0]);
                    self.mission.val(data[0]);
                    self.detailsMission.val(data[1]);
                    self.location.val(data[2]);
                    self.availableBeds.val(data[3]);
                    self.comments.val(data[4]);

                }
            });
        } 
    }
};