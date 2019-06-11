var loginValid = {
    userLogin: $('#user_login'),
    userPass: $('#user_password'),
    loginBtn: $('#login_btn'),
    modal: $('#modal_login'),
    spanClose: $('.close'),
    modalText: $('#modal_text'),

    init: function() {
        var self = this;
        self.loginBtn.click(function(e) {
            e.stopPropagation();
            e.preventDefault();

            self.spanClose.click(function() {
                self.modalText.empty();
                self.modal.hide();
            });
        
            $(document).click(function(event) { 
                if(!$(event.target).closest(self.modal).length) {
                    self.modalText.empty();
                    self.modal.hide();
                } 
            });
            

            $.ajax({                
                url: 'index.php?action=adminLogin',
                type: 'POST',
                data: 'user=' + self.userLogin.val() + '&password=' + self.userPass.val(),
                dataType: 'text',
                success: function(data) {
                    if (data == 'success') {
                        self.modalText.text('Heureux de vous revoir ' + self.userLogin.val() + '.');
                        self.modal.show();
                        self.modal.fadeOut(4000, function() {
                            window.location.href = "index.php?action=displayAdmin";
                        });
                    } else if (data == 'failed') {
                        self.modalText.text('Echec d\'authentfication : mauvais identifiants.');
                        self.modal.show();
                    } else {
                        console.log(data);
                        self.modalText.text('Veuillez renseigner tous les champs requis.');
                        self.modal.show();
                    } 
                }
            });
        });
    }
};