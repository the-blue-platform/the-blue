var notificationsWrapper = $('.dropdown-notifications');
var notifications = notificationsWrapper.find('ul.dropdown-content-body');

// if (notificationsCount <= 0) {
//     notificationsWrapper.hide();
// }

// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher('60ce0a0836db757df76f', {
    cluster: 'ap1',
    encrypted: false
});
var channel = pusher.subscribe('like-channel');

channel.bind('Blue\\Events\\LikeEvent', function (data) {
    var existingNotifications = notifications.html();
    var newNotificationHtml = `
          <li class="media">
                <div class="media-left">
                    <img src="` + data.avatar + `" class="img-circle img-sm" alt="">
                </div>

                <div class="media-body">
                    <a href="#" class="media-heading">
                        <span class="text-semibold">` + data.name + `</span>
                        <span class="media-annotation pull-right">` + data.date + `</span>
                    </a>

                    <span class="text-muted">` + data.content + `</span>
                </div>
            </li>
        `;
    notifications.html(newNotificationHtml + existingNotifications);
});