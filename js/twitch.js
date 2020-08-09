let embed = new Twitch.Embed("twitch-embed", {
    width: screen.width,
    height: screen.height,
    channel: "loudesporttv",
    autoplay: false
  });

  embed.addEventListener(Twitch.Embed.VIDEO_READY, () => {
    var player = embed.getPlayer();
    player.play();
  });