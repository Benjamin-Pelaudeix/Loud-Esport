let embed = new Twitch.Embed("twitch-embed", {
    width: document.body.clientWidth,
    height: document.body.clientHeight,
    channel: "loudesporttv",
    autoplay: false
  });

  embed.addEventListener(Twitch.Embed.VIDEO_READY, () => {
    var player = embed.getPlayer();
    player.play();
  });