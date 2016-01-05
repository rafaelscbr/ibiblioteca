app.controller('editoraCtrl', ['EditoraService', function(EditoraService) {
    var self = this;
    self.editorasAll = [];
	getAllEditoras();

    function getAllEditoras() {
    	EditoraService.query().then(function(response) {
        	self.editorasAll = response.data;
    	});	
    }

    self.addEditora = function(){
       EditoraService.add(self.editora);
       self.editora = '';
       getAllEditoras();
    }
}]);