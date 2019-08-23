      var userFeed = new Instafeed({
        get: 'user',
        userId: '7874973396',
        limit: 8,
        resolution: 'standard_resolution',
        accessToken: '7874973396.09ce46c.a5ebfaa3ab39495c98bb8c29e900a54b',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();