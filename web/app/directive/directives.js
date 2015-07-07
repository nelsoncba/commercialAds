angular.module('Ads')
        .directive('accordion', function () {
            return {
                restrict: 'A',
                link: function (scope, element, attr) {
                    var $toggle = true;
                     $(element).find('li.active').has('ul').children('ul').addClass('collapse in');
                     $(element).find('li').not('.active').has('ul').children('ul').addClass('collapse');
                     
                    $(element).find('li').has('ul').children('a').on('click', function (e) {
                        e.preventDefault();

                        $(this).parent('li').toggleClass('active').children('ul').collapse('toggle');

                        if ($toggle) {
                            $(this).parent('li').siblings().removeClass('active').children('ul.in').collapse('hide');
                        }
                    });
                }
            }
        });