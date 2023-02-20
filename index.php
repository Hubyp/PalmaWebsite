<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="media-query.css">
        <script src="https://kit.fontawesome.com/95fb04c6ee.js" crossorigin="anonymous"></script>
        <title> <%= client.user.username %> - home </title>
    </head>
    <body>
        <!-- nav bar -->
        <nav class="default-nav">
            <img src=" <%= client.user.displayAvatarURL({ dynamic : true }) %> " alt="">
            <ul>
                <li><a href="/"><i class="fas fa-home"></i>&nbsp;Home</a></li>
                <li><a href="/commands"><i class="fas fa-terminal"></i>&nbsp;Commands</a></li>
                <li><a href="/developers"><i class="fas fa-code"></i>&nbsp;developers</a></li>
                <% if(!user) { %>
                    <li><a href="/login"><i class="fas fa-sign-in-alt"></i>&nbsp;login</a></li>
                <% } %>
                <% if(user){ %>
                    <% if(config.bot.owners.includes(user.id)){ %>
                        <li><a href="/admin-panel"><i class="fas fa-cogs"></i>&nbsp;admin panel</a></li>
                    <% } %>
                    <li><a href="/logout"><i class="fas fa-sign-out-alt"></i>&nbsp;logout</a></li>
                <% } %>
            </ul>
        </nav>
        <nav class="mobile-nav">
            <ul>
                <li><a href="/"><i class="fas fa-home"></i></a></li>
                <li><a href="/commands"><i class="fas fa-terminal"></i>&nbsp;cmd's</a></li>
                <li><a href="/developers"><i class="fas fa-code"></i>&nbsp;dev's</a></li>
                <% if(!user) { %>
                    <li><a href="/login"><i class="fas fa-sign-in-alt"></i>&nbsp;</a></li>
                <% } %>
                <% if(user){ %>
                    <% if(config.bot.owners.includes(user.id)){ %>
                        <li><a href="/admin-panel"><i class="fas fa-cogs"></i></a></li>
                    <% } %>
                    <li><a href="/logout"><i class="fas fa-sign-out-alt"></i></a></li>
                <% } %>
            </ul>
        </nav>
        <div class="main-div">
            
            <div class="bot">
                <img src=" <%= client.user.displayAvatarURL({dynamic : true} ) %> ">
                <div class="bot-info">
                    <h1><%= client.user.username %> website</h1>
                    <br>
                    <p>bot description</p>
                    <br>
                    <div class="bot-links">
                        <a href="/invite"><button><i class="fab fa-discord"></i>&nbsp;Invite</button></a>
                        <a href="/discord"><button class="sup"><i class="fas fa-users"></i>&nbsp;Support</button></a>
                    </div>
            </div>
        </div>
        <div class="prim-div">
                <div class="heading">
                    <h1><i class="fas fa-star"></i>&nbsp;features</h1>
                </div>
                <div class="content">
                    <div class="contener">
                        <img src="/images/technical-support.png" alt="">
                        <div class="description">
                            <h2>feature 1</h2>
                            <p> feature 1 <br> text </p>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="contener">
                        <img src="/images/application.png" alt="">
                        <div class="description">
                            <h2> feature 2 </h2>
                            <p> feature 1 <br> text </p>
                        </div>
                    </div>
                </div>
            <div class="content">
                <div class="contener">
                    <img src="/images/technical-support.png" alt="">
                    <div class="description">
                        <h2>fast support</h2>
                        <p>we have a fast support <br> team to solve your <br> problems and <br> answer your questions</p>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="contener">
                    <img src="/images/application.png" alt="">
                    <div class="description">
                        <h2>more options</h2>
                        <p>and more options <br> you can try</p>
                    </div>
                </div>
            </div>
            <div class="bot-status">
                <div class="bot-status-title">
                    <h1>
                        <i class="fas fa-signal"></i> bot status
                    </h1>
                </div>
                <div class="bot-status-container">
                    <div class="bot-status-content">
                        <div class="head">
                            <div class="text">
                                <i class="fas fa-server"></i>&nbsp;servers
                            </div>
                        </div>
                        <div class="status-content">
                            <div class="txt">
                                <p>
                                    more than <%= client.guilds.cache.size %> servers
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bot-status-content">
                        <div class="head">
                            <div class="text">
                                <i class="fas fa-hashtag"></i>&nbsp;channels
                            </div>
                        </div>
                        <div class="status-content">
                            <div class="txt">
                                <p>
                                    about <%= client.channels.cache.size %> under use
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bot-status-content">
                        <div class="head">
                            <div class="text">
                                <i class="fas fa-satellite"></i>&nbsp;ping
                            </div>
                        </div>
                        <div class="status-content">
                            <div class="txt">
                                <p>
                                    <%= client.ws.ping %> ms
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p>all rights reserved for <a href="https://www.instagram.com/1._.a7med._.1">A7MED</a></p>
            </footer>
    </body>
</html>
