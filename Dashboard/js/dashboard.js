function getOnlineCount() {
  $.get("http://localhost:5001/online_count", function (data) {
    $("#online-count").text(data + " players simultaneously");
  }).fail(function (error) {
    $("#online-count").text("0 players simultaneously");
  });
}

getOnlineCount();
$(document).ready(function () {
  setInterval(getOnlineCount, 5000);
});
