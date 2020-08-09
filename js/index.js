const twitchStatus = document.getElementById('status');
const twitchTitle = document.getElementById('title');
const joinButton = document.getElementById('join');

let request = new XMLHttpRequest();

request.onreadystatechange = function() {
    let statusResponse;
    if (this.readyState == XMLHttpRequest.DONE) {
        let response = JSON.parse(this.responseText);
        statusResponse = response.data;
        console.log(statusResponse);
        if (statusResponse.length == 0) {
            twitchStatus.innerHTML = '<i class="fas fa-video-slash"></i> Hors-Ligne'
            joinButton.style.display = 'none';
        }
        else {
            twitchStatus.innerHTML = '<i class="fas fa-video"></i> Live';
            twitchStatus.style.color = '#a81b1b';
            twitchTitle.textContent = response.data.title;
            joinButton.style.display = 'unset';
        }
    }
}
request.open("GET", "https://api.twitch.tv/helix/streams?user_id=238905363");
request.setRequestHeader("Client-ID", "k2r01r5dhhfbmp7xshqmtna6fkai4w");
request.setRequestHeader("Authorization","Bearer u36ztdz4enx8rge62a86alxxwoa5lf");
request.send();