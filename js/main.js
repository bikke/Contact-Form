var myApp = angular.module('myapp', [])
  .controller('attendCtrl', function($scope) {
    $scope.group_num = 1;
    $scope.validity = true;
    console.log($scope.validity);
    $scope.tens_place = 0;


    $scope.Message1 = "test message1              ";
    $scope.Message2 = "test message2              ";
    $scope.Message3 = "test message3              ";
    $scope.Message4 = "test message4              ";
    $scope.Message5 = "test message5              ";
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
        // console.log($scope.placeholder);
        return update();
      },70);
    };

    $scope.Message_Data = $scope.placeholderData1;//Message_Data初期設定
    update();// placeholder update 実行!

    $scope.send = function() {
      // clearTimeout($scope.timeout_job);// placeholderの更新の停止
      console.log('ok')
      $('#confirm_Modal').modal('hide');
    }

      $scope.group_num = $scope.num;
      $scope.validity = true;
      console.log($scope.validity);
      $scope.tens_place = 0;
    // }
  });
