var myApp = angular.module('myapp', [])
  .controller('attendCtrl', function($scope) {

    $scope.Message="このイベント、親子で参加できるって本当ですか？？　　　";//placeholder Message
    $scope.placeholderData = $scope.Message.split("");
    $scope.placeholderIndex = 0;
    $scope.placeholder = "";
    update=function(){
      $scope.timeout_job = setTimeout(()=>{
        $scope.$apply(() => {
          if ($scope.placeholderIndex <= $scope.placeholderData.length) {
            $scope.placeholder += $scope.placeholderData[$scope.placeholderIndex];
            $scope.placeholderIndex++;
          }
          if($scope.placeholderIndex > $scope.placeholderData.length){
            $scope.placeholderIndex = 0;
            $scope.placeholder = "";

          }
        });
        return update();
      },100);
    };
    update();
    $scope.send = function() {
      $('#confirm_Modal').modal('hide');
    }
    
  });
