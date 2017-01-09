var myApp = angular.module('myapp', [])
  .controller('attendCtrl', function($scope) {

    $scope.Message1="このイベントは親子で参加できますか？？　　　　　　";//placeholder Message
    $scope.Message2="ビンゴ大会の景品で、一等賞が「ヒデさんの一発芸、1年分」っていう噂は本当？？　　　　　　";//placeholder Message
    $scope.Message3="なんかさ、BIKKEの250周年記念パーティーまであと225年かーって思ったらワクワクしすぎて夜も眠れないW　　　　　　";//placeholder Message
    $scope.placeholderData1 = $scope.Message1.split("");
    $scope.placeholderData2 = $scope.Message2.split("");
    $scope.placeholderData3 = $scope.Message3.split("");
    $scope.placeholderIndex = 0;
    $scope.timesIndex = 1;
    $scope.placeholder = "";
    update=function(){
      $scope.timeout_job = setTimeout(()=>{
        $scope.$apply(() => {
          if ($scope.placeholderIndex <= $scope.placeholderData1.length) {
            $scope.placeholder += $scope.placeholderData1[$scope.placeholderIndex];
            $scope.placeholderIndex++;
          }
          if(($scope.placeholderIndex > $scope.placeholderData1.length) && ($scope.timesIndex % 3 == 1)){
            $scope.timesIndex++;
            $scope.placeholderIndex = 0;
            $scope.placeholder = "";
            $scope.Message_Data1 = $scope.placeholderData1;
            $scope.placeholderData1 = $scope.placeholderData2;
          }
          if(($scope.placeholderIndex > $scope.placeholderData1.length) && ($scope.timesIndex % 3 == 2)){
            $scope.timesIndex++;
            $scope.placeholderIndex = 0;
            $scope.placeholder = "";
            $scope.placeholderData1 = $scope.placeholderData3;
          }
          if(($scope.placeholderIndex > $scope.placeholderData1.length) && ($scope.timesIndex % 3 == 0)){
            $scope.timesIndex++;
            $scope.placeholderIndex = 0;
            $scope.placeholder = "";
            $scope.placeholderData1 = $scope.Message_Data1;
          }
        });
        return update();
      },70);
    };

    update();// placeholder update 実行!

    $scope.send = function() {
      $('#confirm_Modal').modal('hide');
    }

  });
