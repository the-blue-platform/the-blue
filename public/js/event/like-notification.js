var notificationsWrapper = $('.dropdown-notifications');
var notifications = notificationsWrapper.find('ul.dropdown-content-body');

Pusher.logToConsole = true;

const PUSHER_KEY = '60ce0a0836db757df76f';

const NOTIFICATION_TYPES = {
    newPost: 'Blue\\Notifications\\PostNotification'
};

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '60ce0a0836db757df76f',
    cluster: 'ap1',
    encrypted: true
});
$(document).ready(function () {
    $.get('/notifications', function (data) {
        // console.log(data);
    });

    window.Echo.private(`Blue.Entity.User.UserEntity.7`)
        .notification((notification) => {
            addNotifications([notification], '#notifications');
        });
});