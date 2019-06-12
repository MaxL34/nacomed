var option = {
    editMgmtBtn: $('#edit-mgmt'),
    newsMgmtBtn: $('#news-mgmt'),
    mapMgmtBtn: $('#map-mgmt'),
    comMgmtBtn: $('#com-mgmt'),
    newsCreationBtn: $('#news-creation'),

    init: function() {
        var self = this;

        self.newsMgmtBtn.click(function() {
            window.location.href = "/nacomed/public/views/backend/newsManagementView.php";
        });

        self.newsCreationBtn.click(function() {
            window.location.href = "/nacomed/public/views/backend/newsCreationView.php";
        });

        self.editMgmtBtn.click(function() {
            window.location.href = "/nacomed/index.php?action=listArticlesToEdit";
        });
    }


};