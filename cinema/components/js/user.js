function showNotification() {
    require(['pgui.lite-version-notification'], function (notification) {
        notification('http://www.sqlmaestro.com/products/mysql/phpgenerator/purchase/');
    });
}

$(function () {
    setTimeout(
        function() {
            showNotification();
        }, 5000);
});
