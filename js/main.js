var myApp = angular.module('myapp', [])
  .controller('attendCtrl', function($scope) {

    $scope.Message1 = "このイベントは親子で参加できますか？？           ";
    $scope.Message2 = "特になし           ";
    $scope.Message3 = "ビンゴ大会の景品で、一等賞が「ヒデさんの一発芸、1年分!」っていう噂は本当？？           ";
    $scope.Message4 = "なんかさ、BIKKEの250周年記念パーティーまであと225年かーって思ったらワクワクしすぎて夜も眠れないW           ";
    $scope.Message5 = "（・ω・）ノ         ";
    $scope.placeholderData1 = $scope.Message1.split("");
    $scope.placeholderData2 = $scope.Message2.split("");
    $scope.placeholderData3 = $scope.Message3.split("");
    $scope.placeholderData4 = $scope.Message4.split("");
    $scope.placeholderData5 = $scope.Message5.split("");
    $scope.placeholderIndex = 0;
    $scope.timesIndex = 1;
    $scope.placeholder = "";
    update=function(){
      $scope.timeout_job = setTimeout(()=>{
        $scope.$apply(() => {
          if ($scope.placeholderIndex <= $scope.Message_Data.length) {
            $scope.placeholder += $scope.Message_Data[$scope.placeholderIndex];
            $scope.placeholderIndex++;
          }
          if(($scope.placeholderIndex > $scope.Message_Data.length) && ($scope.timesIndex % 5 == 1)){
            $scope.timesIndex++;
            $scope.placeholderIndex = 0;
            $scope.placeholder = "";
            $scope.Message_Data = $scope.placeholderData2;
          }
          if(($scope.placeholderIndex > $scope.Message_Data.length) && ($scope.timesIndex % 5 == 2)){
            $scope.timesIndex++;
            $scope.placeholderIndex = 0;
            $scope.placeholder = "";
            $scope.Message_Data = $scope.placeholderData3;
          }
          if(($scope.placeholderIndex > $scope.Message_Data.length) && ($scope.timesIndex % 5 == 3)){
            $scope.timesIndex++;
            $scope.placeholderIndex = 0;
            $scope.placeholder = "";
            $scope.Message_Data = $scope.placeholderData4;
          }
          if(($scope.placeholderIndex > $scope.Message_Data.length) && ($scope.timesIndex % 5 == 4)){
            $scope.timesIndex++;
            $scope.placeholderIndex = 0;
            $scope.placeholder = "";
            $scope.Message_Data = $scope.placeholderData5;
          }
          if(($scope.placeholderIndex > $scope.Message_Data.length) && ($scope.timesIndex % 5 == 0)){
            $scope.timesIndex++;
            $scope.placeholderIndex = 0;
            $scope.placeholder = "";
            $scope.Message_Data = $scope.placeholderData1;
          }
        });
        return update();
      },70);
    };

    $scope.Message_Data = $scope.placeholderData1;//Message_Data初期設定
    update();// placeholder update 実行!

    $scope.send = function() {
      $('#confirm_Modal').modal('hide');
    }

  });
