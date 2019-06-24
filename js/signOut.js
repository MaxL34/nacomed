var signOut = {
    signOutLink: $('#signOut_link'),
    modalLogOut: $('#modal_logout'),
    modalText: $('#modal_text'),
    
    init: function() {
        var self = this;

        self.signOutLink.click(function(e) {
            e.stopPropagation();
            e.preventDefault();
            
            self.modalLogOut.show();

            $.ajax({
                url: './index.php?action=signOut',
                type: 'GET',
                success: function() {
                    self.modalLogOut.fadeOut(4000, function() {
                        self.modalLogOut.hide();
                        window.location.href = "./index.php";
                    });
                }
            });
        });
    }
};