var option = {
    programMgmtBtn: $('#program-mgmt'),
    mapMgmtBtn: $('#map-mgmt'),
    editMgmtBtn: $('#edit-mgmt'),
    mapMgmtBtn: $('#map-mgmt'),
    listEventsBtn: $('#events-list'),

    init: function() {
        var self = this;

        self.editMgmtBtn.click(function() {
            window.location.href = "../../../index.php?action=listArticlesToEdit";
        });
    
        self.mapMgmtBtn.click(function() {
            window.location.href = "./index.php?action=displayMapMgmt";
        });

        self.programMgmtBtn.click(function() {
            window.location.href = "./index.php?action=displayProgMgmt";
        });

        self.listEventsBtn.click(function() {
            window.location.href = "./index.php?action=listMapEvents";
        });
    }


};