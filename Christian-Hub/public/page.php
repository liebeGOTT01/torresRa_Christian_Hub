<?php

  session_start();
  if(!$_SESSION['username']){ 
    header("Location: http://localhost:8081/torresRa/php_guidedStudy/Christian-Hub/public/login.php");
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Christianity Hub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="../src/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<style>
  /* for inspiring bible verse */
  .b-verseImg {
    height:300px;
    width: 285px;
    padding-left:10px;
    padding-right:10px;
    position: center;
  }
  .hovereffect {
    width: 285px;
    height: 300px;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
  }
  .hovereffect .overlay {
    position: absolute;
    width: 80%;
    height: 80%;
    left: 10%;
    top: 10%;
    border-bottom: 5px solid #FFF;
    border-top: 5px solid #FFF;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: scale(0, 1);
    -ms-transform: scale(0, 1);
    transform: scale(1,0);
  }
  .hovereffect:hover .overlay {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    
  }
  .hovereffect img {
    display: block;
    position: relative;
    -webkit-transition: all 0.35s;
    transition: all 0.35s;
  }
  .hovereffect:hover img {
    filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
    filter: brightness(0.6);
    -webkit-filter: brightness(0.6);
  }
  .hovereffect h2 {
    text-transform: uppercase;
    text-align: center;
    position: relative;
    font-size: 20px;
    background-color:gray;
    color:yellow;
    padding: 20px;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  .hovereffect a,
  .hovereffect p {
    color: #FFF;
    padding: 1em 0;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
  }
  .hovereffect:hover a,
  .hovereffect:hover p,
  .hovereffect:hover h2 {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

/* for inspiring stories */
.story_img{
  float:left;
  width:35%;
  height:180px;
  margin:0px 15px 5px 0px; 
  border-radius: 15%
}
.story1 {
  width: 250px;
  height: 250px;
}


/* for verse of the day */
.vod_border {
  background-image: url("../src/images/head..jpg");
  height: 550px;
  border-radius: 4%;
}
.vod_container{
  background-color:#ffe6cc;
  border-radius: 4%;
  height: 510px;
}

/* for featured article */
.f_article {
  padding: 15px;
}
.article_bg {
  background-image: url("../src/images/head..jpg")
}
.articlePic {
  width: 100%;
  height:100%;  
}  

.btn:hover {
  color:black;
  opacity: 0.8 !important;
}

.item-card {
  border-radius: 5px;
}

.card-title {
  height: 200px;
  padding: 8px;
  border-radius: 5px 5px 0 0;
  color: #fff;
  text-align: center;
}

  
.body-text {
  padding:10px;
  font-size: 20px;
}

/*for related videos */
.vid {
  height: 60px;
  width: 70px;
  background-color: orangered;
  padding: 10px 0px 0px 7px;
  border-radius: 15%;
}

.fa-play {
  color:white;
  font-size: 40px;
  text-align: center;
}

</style>


<body>
  <script>
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.height = "20px 10px";
        document.getElementById("nav-text").style.fontSize = "25px";
      } 
      
    }
  </script>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navig" id="navbar">

    <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse act" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="nav-text">
        <li class="nav-item active margin ">
          <a class="nav-link text-white" href="page.php">ᕼOᗰE
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item margin ">
          <a class="nav-link text-white" href="../src/html/bible.html">ᗷIᗷᒪE
          </a>
        </li>
        <li class="nav-item margin">
          <a class="nav-link text-white" href="../src/html/trivia.html">ᗷIᗷᒪE TᖇIᐯIᗩ
          </a>
        </li>
        <li class="nav-item margin">
          <a class="nav-link text-white" href="../src/html/songs.html">SOᑎGS
          </a>
        </li>

        <li class="nav-item margin">
          <a class="nav-link text-white" href="../src/html/about.html">ᗩᗷOᑌT</a>
        </li>
      </ul>

      
      <button name="logout" class="btn btn-primary"><a href="logout.php">Log out</a></button>
    </div>
  </nav>
  <br>

  <div>
    <div class="swap">
      <script>
        var i = 0;
        var images = [];
        var time = 4000;

        images[0] = '../src/images/pray.jfif';
        images[1] = '../src/images/EVAN.jfif';
        images[2] = '../src/images/HELL.jfif';


        function changeImg() {
          document.slide.src = images[i]

          if (i < images.length - 1) {
            i++;
          } else {
            i = 0;
          }

          setTimeout("changeImg()", time);

        }


        window.onload = changeImg

      </script>

      <img name="slide" class="swapImg">
      <div class="centered">

        <p class="center1">
          𝐂𝐇𝐑𝐈𝐒𝐓𝐈𝐀𝐍𝐈𝐓𝐘 𝐇𝐔𝐁

        </p>
        <p class="center2">𝚆𝙰𝙻𝙺 𝚆𝙸𝚃𝙷 𝙶𝙾𝙳 𝚃𝙾𝙳𝙰𝚈!!!.....</p>
      </div>
    </div>


    <br>
    <br>

    <br>
    <br>

    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center">
          <div class="w3-panel w3-card-2 chapter_bg">
            <div class="container">
              <br>
              <div class="row">

                <div class="col">

                  <hr class="breaker">
                </div>
                <div class="col-auto">

                  <h3 class="txt">𝐈𝐍𝐒𝐏𝐈𝐑𝐈𝐍𝐆 𝐒𝐓𝐎𝐑𝐈𝐄𝐒</h3>
                </div>
                <div class="col">
                  <hr class="breaker">
                </div>
              </div>
            </div>

            <br>
            <h4 class="text-center">Jonah and the Big Fish</h4>
            <br>

            <img src="../src/images/jonah.jpg" class="story_img">
            <p class="text-justify font-weight-normal">God called to Jonah one day and told him to go preach to Nineveh
              because the people were very wicked. Jonah
              hated
              this idea because Nineveh was one of Israel's greatest enemies and Jonah wanted nothing to do with
              preaching
              to
              them! Jonah tried to run away from God in the opposite direction of Nineveh and headed by boat to
              Tarsish.
              God sent a great storm upon the ship and the men decided Jonah was to blame so they threw him
              overboard.

            </p>


            <button type="button" class="btn btn-success sign_up" data-toggle="modal" data-target="#story">
              READ MORE
            </button>
            <br>
            <br>

            <div class="modal fade" id="story">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title txt">Jonah and the Big Fish</h4>
                    <hr>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <img src="../src/images/jonah.jpg" class="story1">
                    <p>
                      As soon as they tossed Jonah in the water, the storm stopped. God sent a big fish, some call it a
                      whale,
                      to swallow Jonah and to save him from drowning. While in the belly of the big fish (whale), Jonah
                      prayed
                      to God for help, repented, and praised God. For three days Jonah sat in the belly of the fish.
                      Then,
                      God
                      had the big fish throw up Jonah onto the shores of Nineveh.Jonah preached to Nineveh and warned
                      them
                      to
                      repent before the city is destroyed in 40 days. The people believed Jonah, turned from their
                      wickedness,
                      and God had mercy on them. Jonah now became angry and bitter because God did not destroy the
                      Ninevites
                      who were Israels enemy! When Jonah sat to rest God provided a vine to give him shade. The next
                      day,
                      God
                      sent a worm to eat the vine. Jonah now sat in the hot sun complaining and wanting to die. God
                      called
                      out
                      to Jonah and scolded him for being so concerned and worried about just a plant while God was
                      concerned
                      with the heart condition and lives of 120,000 people who lived in the city of Nineveh.</p>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="col-sm-1"></div>

        <div class="col-sm-5 vod_border">

          <br>

          <div class="container-fluid text-center vod_container p-5">

            <div class="col-auto">
              <h4 class="txt">𝐕𝐄𝐑𝐒𝐄 𝐎𝐅 𝐓𝐇𝐄 𝐃𝐀𝐘</h4>
            </div>

            <br>

            <h4 class="text-danger">𝐉𝐨𝐡𝐧 𝟏:𝟑𝟐-𝟑𝟒</h4>
            <br>

            <h5>
              Then John gave this testimony: "I saw the Spirit come down from heaven as a dove and remain on him. I
              would
              not have known
              him, except that the one who sent me to baptize with water told me, 'The man on whom you see the Spirit
              come
              down
              and remain is he who will baptize with the Holy Spirit.' I have seen and I testify that this is the Son
              of
              God.
            </h5>
            <br>

            <button type="button" class="btn btn-success sign_up" data-toggle="modal" data-target="#verse">
              SEE VERSE REFLECTION
            </button>
            <br>
            <br>
            <br>

            <div class="modal fade" id="verse">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                  <div class="modal-header">
                    <h4 class="modal-title">....What does John 1:32-34 mean?....</h4>
                    <hr>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <div class="modal-body text-left">
                    <p>Having been told what would happen, John the Baptist recognizes and takes note with reflection
                      and
                      acute
                      interest the Holy Spirit descending from heaven and manifesting Himself in the form of a dove
                      and
                      abiding
                      on Jesus. So certain was he of what his ears had heard and now his eyes beheld that John the
                      Baptist
                      exclaimed
                      with great assurance:
                      <br>
                      <br>

                      <em>“I have seen and I testify that this is the Son of God”(John 1:34).</em>

                      It must be overwhelming to experience what one has only been told and believed through faith
                      and
                      then
                      subsequently be given
                      the privilege to actually see it. At the end of the book of Job we find a similar situation
                      where
                      faith
                      becomes sealed with sight:
                      <br>
                      <br> Then Job replied to the LORD:
                      <em> “I know that you can do all things; no plan of yours can be thwarted. You asked, ‘Who is
                        this
                        that obscures
                        my plans without knowledge?’ Surely I spoke of things I did not understand, things too
                        wonderful
                        for
                        me to know. “You said, ‘Listen now, and I will speak; I will question you, and you shall
                        answer
                        me.’
                        My ears had heard of you but now my eyes have seen you. Therefore I despise myself and repent
                        in
                        dust
                        and ashes.”</em>(Job 42:1-6)
                      <br>
                      <br> I am reminded of Peter’s response to Jesus’ question about who the disciples thought He
                      was:
                      <em>“You are the Christ, the Son of the living God.”</em>
                      <br>
                      <br> And then Jesus replied to Peter:
                      <br>
                      <br> It is the Father who reveals truth.
                      <em>“Blessed are you, Simon son of Jonah, for this was not revealed to you by man, but by my
                        Father
                        in heaven.”
                      </em> (Matthew 16:16-17)
                      <br>
                      <br> Just as with John the Baptist and Job, it was the Father in heaven who revealed this truth
                      to
                      Peter. It
                      mattered not to them that Jesus was not clad in external pomp and grandeur; they were not
                      ashamed
                      to
                      confess
                      freely that Jesus was God’s Son.
                      <br>
                      <br> Just as the prophet Isaiah had prophesized:
                      <br>
                      <br> He grew up before him like a tender shoot, and like a root out of dry ground. He had no
                      beauty
                      or majesty
                      to attract us to him, nothing in his appearance that we should desire him. He was despised and
                      rejected
                      by men, a man of sorrows, and familiar with suffering. Like one from whom men hide their faces
                      he
                      was
                      despised,
                      and we esteemed him not. Surely he took up our infirmities and carried our sorrows, yet we
                      considered
                      him
                      stricken by God, smitten by him, and afflicted. But he was pierced for our transgressions, he
                      was
                      crushed
                      for our iniquities; the punishment that brought us peace was upon him, and by his wounds we are
                      healed.
                      (Isaiah 53:2-5)
                      <br>
                      <br> John tells us that Jesus would baptize with the Holy Spirit. John’s cleansing with water
                      was
                      one
                      thing,
                      but the cleansing that would be produced by the Holy Spirit would be totally different. After
                      His
                      suffering
                      and resurrection Jesus gave convincing proofs to His followers that He was indeed alive and
                      commanded
                      them
                      to wait for the gift of the promised Holy Spirit. Just as John identified people with himself
                      through
                      the
                      baptism of water, now Jesus would identify His followers through the Holy Spirit bestowing upon
                      them
                      His
                      gifts and graces and comforts. This is a confirmation of the John’s words “I baptize you with
                      water.
                      But
                      after me comes one who will baptize you with the Holy Spirit.” Jesus confirms John’s message in
                      the
                      book
                      of Acts:
                      <br>
                      <br> After his suffering, he showed himself to these men and gave many convincing proofs that
                      he
                      was
                      alive.
                      He appeared to them over a period of forty days and spoke about the kingdom of God. On one
                      occasion,
                      while
                      he was eating with them, he gave them this command:
                      <em> “Do not leave Jerusalem, but wait for the gift my Father promised, which you have heard me
                        speak
                        about.
                        For John baptized with water, but in a few days you will be baptized with the Holy Spirit.”
                      </em>(Acts
                      1:3-5) \
                      <br>
                      <br> Take It to Heart Jesus’ appearance was not what the people expected–they were looking for
                      pomp
                      and splendor.
                      Likewise, as a believer in Jesus I am to be not what the world expects, empowered by the Holy
                      Spirit
                      and
                      showing forth the humility and love of Jesus through my words and deeds</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
      <br>
      <br>
      <br>
      <br>
      <br>

      <section>
        <div class="container">
          <br>
          <div class="container">
            <div class="row">
              <div class="col">
                <hr class="breaker">
              </div>
              <div class="col-auto">
                <h4 class="txt">𝐅𝐄𝐀𝐓𝐔𝐑𝐄𝐃 𝐀𝐑𝐓𝐈𝐂𝐋𝐄𝐒</h4>
              </div>
              <div class="col">
                <hr class="breaker">
              </div>
            </div>
          </div>

          <br>

          <div class="row">

            <div class="col-lg-3 col-md-6 mt-md-3 d-flex">
              <div class="item-card d-flex">
                <div class="body">
                  <div class="card-title article_bg">
                    <img src="../src/images/walk.jpg" class="articlePic">
                  </div>
                  <div class="text-center body-text font-weight-bold">
                    <a href="../src/html/article1.html">Can I Walk with
                      God Alone?</a>
                  </div>
                  <div class="text-center text-primary btn-pad">
                    <a href="../src/html/article1.html">see full
                      article....</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-md-3 d-flex">
              <div class="item-card d-flex">
                <div class="body">
                  <div class="card-title article_bg">
                    <img src="../src/images/plural.jpg" class="articlePic">
                  </div>
                  <div class="text-center body-text font-weight-bold">
                    <a href="../src/html/article2.html">Why Does God
                      Refer to Himself in the
                      Plural in Genesis 1:26 and 3:22?
                    </a>
                  </div>
                  <div class="text-center text-primary btn-pad">
                    <a href="../src/html/article2.html">see full article....</a> </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-md-3 d-flex">
              <div class="item-card d-flex">
                <div class="body">
                  <div class="card-title article_bg">
                    <img src="../src/images/pass.jpg" class="articlePic">
                  </div>
                  <div class="text-center body-text font-weight-bold">
                    <a href="../src/html/article3.html">Is
                      the Phrase, “This Too Shall Pass” in the Bible?
                    </a>
                  </div>
                  <div class="text-center text-primary btn-pad">
                    <a href="../src/html/article3.html">see full
                      article....</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-md-3 d-flex">
              <div class="item-card d-flex">
                <div class="body">
                  <div class="card-title article_bg">
                    <img src="../src/images/thanks.jpg" class="articlePic"> </div>
                  <div class="text-center body-text font-weight-bold">
                    <a href="../src/html/article4.html">38 Ways to Give Thanks in Hard
                      times
                    </a>
                  </div>
                  <div class="text-center text-primary btn-pad">
                    <a href="../src/html/article4.html">see full
                      article....</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <hr>
        </div>
      </section>

      <br>
      <br>
      <br>

      <div class="jumbotron-fluid">
        <div class="row">
          <div class="col-lg-3 border-right ">

            <h4 class="txt">𝐑𝐄𝐋𝐀𝐓𝐄𝐃 𝐕𝐈𝐃𝐄𝐎𝐒</h4>

            <br>
            <br>

            <br>
            <div class="row">
              <div class="col-sm-3">
                <a href="https://www.youtube.com/watch?v=KGlx11BxF24" class="fa fa-play vid"></a>
              </div>
              <div class="col-sm-9 text-primary">
                <a href=https://www.youtube.com/watch?v=KGlx11BxF24> <h5>Falling Plates</h5>
                </a>
              </div>
            </div>
            <hr class="breaker">
            <div class="row">
              <div class="col-sm-3">
                <a href="#" class="fa fa-play vid"></a>
              </div>
              <div class="col-sm-9 text-primary">
                <a href="https://www.youtube.com/watch?v=2VjgS1Z2QQQ">
                  <h5>God I am Tired of Pain</h5>
                </a>
              </div>
            </div>
            <hr class="breaker">
            <div class="row">
              <div class="col-sm-3">
                <a href="#" class="fa fa-play vid"></a>
              </div>
              <div class="col-sm-9 text-primary">
                <a href="https://www.youtube.com/watch?v=2-QJYS9Vg7c">
                  <h5>Faith</h5>
                </a>
              </div>
            </div>
            <hr class="breaker">
            <div class="row">
              <div class="col-sm-3">
                <a href="#" class="fa fa-play vid"></a>
              </div>
              <div class="col-sm-9 text-primary">
                <a href="https://www.youtube.com/watch?v=uZpHiof5aSA">
                  <h5>Lazy Christian</h5>
                </a>
              </div>
            </div>
            <hr class="breaker">
            <div class="row">
              <div class="col-sm-3">
                <a href="#" class="fa fa-play vid"></a>
              </div>
              <div class="col-sm-9 text-primary">
                <a href="https://www.youtube.com/watch?v=XPveFkd3dYo">
                  <h5>8 Signs God is Trying to Catch your Attention</h5>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-9">
            <div class="container">
              <div class="row">
                <div class="col"></div>
                <div class="col">
                  <hr class="breaker">
                </div>
                <div class="col-auto">
                  <h4 class="txt">𝐈𝐍𝐒𝐏𝐈𝐑𝐈𝐍𝐆 𝐁𝐈𝐁𝐋𝐄 𝐕𝐄𝐑𝐒𝐄𝐒</h4>
                </div>
                <div class="col">
                  <hr class="breaker">
                </div>
                <div class="col"></div>
              </div>
            </div>
            <br>
            <br>
            <br>
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-4">
                  <div class="hovereffect">
                    <img class="b-verseImg" src="../src/images/love1.jfif" alt="">
                    <div class="overlay">
                      <br>
                      <br>

                      <h2>ＡＢＯＵＴ<br> ＬＯＶＥ
                      </h2>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4">
                  <div class="hovereffect">
                    <img class="b-verseImg" src="../src/images/hope.jfif" alt="">
                    <div class="overlay">
                      <br>
                      <br>

                      <h2> ＡＢＯＵＴ<br> ＨＯＰＥ</h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="hovereffect">
                    <img class="b-verseImg" src="../src/images/faith.jfif" alt="">
                    <div class="overlay">
                      <br>
                      <br>

                      <h2>ＡＢＯＵＴ<br> ＦＡＩＴＨ</h2>
                    </div>
                  </div>
                </div>
              </div>

              <br>
              <br>

              <div class="row">
                <div class="col-sm-4">
                  <div class="hovereffect">
                    <img class="b-verseImg" src="../src/images/trouble.jpg" alt="">
                    <div class="overlay">
                      <br>
                      <br>

                      <h2>ＩＮ ＴＩＭＥＳ<br> ＯＦ<br> ＴＲＯＵＢＬＥ</h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="hovereffect">
                    <img class="b-verseImg" src="../src/images/weakness.jpg" alt="">
                    <div class="overlay">
                      <br>
                      <br>

                      <h2>ＩＮ ＴＩＭＥＳ<br> ＯＦ<br>ＷＥＡＫＮＥＳＳ</h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="hovereffect">
                    <img class="b-verseImg" src="../src/images/worry.jpg" alt="">
                    <div class="overlay">
                      <br>
                      <br>

                      <h2>ＩＮ ＴＩＭＥＳ<br> ＯＦ<br> ＷＯＲＲＩＮＥＳＳ</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <br>

    <div class="jumbotron jumbotron-fluid footer">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 text-center">
          <h1 class=" text-light">Want to be blessed with our daily devotion?</h1>
          <h3 class=" text-light">You can recieve our daily email now!</h3>

          <br>
          <br>

          <button type="button" class="btn btn-primary sign_up" data-toggle="modal" data-target="#myModal">
            Sign Up to Register
          </button>

          <div class="modal fade" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <div class="modal-header">
                  <h4 class="modal-title">Sign Up</h4>
                  <hr>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Confirm Password">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Send message</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-2"></div>
      </div>
      <br>
      <br>
      <br>
      <div class="footerFollow ">
        <center>
          <br>


          <h5 class="text-white">Follow Us On
            <br>
            <br>
            <a href="#" class="fa fa-facebook "></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
          </h5>

          <p class="text-white">Copyright 2019. All Rights Reserved. Reproduction in whole or
            in part without permission is prohibited.
          </p>
          <br>
        </center>
      </div>
    </div>

</body>

</html>