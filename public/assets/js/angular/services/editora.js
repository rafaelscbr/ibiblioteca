app.factory('EditoraService', ['$http', function($http) {
    return {
        query: function() {
            return $http.get('/api/editora.php?acao=getall');
        },

        add: function(data) {
            return $http.post('/api/editora.php?acao=add', data);
        }
    }
}]);