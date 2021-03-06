<?= $this->extend('layouts/backend') ?>


<?= $this->section('content')?>

<div class="content-header">
        <h4 class="title is-4">Elements</h4>
        <span class="separator"></span>
        <nav class="breadcrumb has-bullet-separator" aria-label="breadcrumbs">
            <ul>
                <li><a href="#">General</a></li>
                <li class="is-active"><a href="#" aria-current="page">Elements</a></li>
            </ul>
        </nav>
    </div>

    <div class="content-body">
        <div class="columns">
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">Box</p>
                        <div class="box">
                            <article class="media">
                                <div class="media-left">
                                    <figure class="image is-64x64">
                                        <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <div class="content">
                                        <p>
                                            <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                                            <br>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur
                                            sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                                        </p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <a class="level-item" aria-label="reply">
                                                <span class="icon is-small">
                                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                            <a class="level-item" aria-label="retweet">
                                                <span class="icon is-small">
                                                    <i class="fa fa-retweet" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                            <a class="level-item" aria-label="like">
                                                <span class="icon is-small">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">Buttons</p>
                        <div class="row-item">
                            <a class="button is-white">White</a>
                            <a class="button is-light">Light</a>
                            <a class="button is-dark">Dark</a>
                            <a class="button is-black">Black</a>
                            <a class="button is-text">Text</a>
                        </div>
                        <div class="row-item">
                            <a class="button is-primary">Primary</a>
                            <a class="button is-link">Link</a>
                            <a class="button is-info">Info</a>
                            <a class="button is-success">Success</a>
                            <a class="button is-warning">Warning</a>
                            <a class="button is-danger">Danger</a>
                        </div>
                        <div class="row-item">
                            <p class="buttons">
                                <a class="button">
                                    <span class="icon is-small">
                                        <i class="fa fa-bold"></i>
                                    </span>
                                </a>
                                <a class="button">
                                    <span class="icon is-small">
                                        <i class="fa fa-italic"></i>
                                    </span>
                                </a>
                                <a class="button">
                                    <span class="icon is-small">
                                        <i class="fa fa-underline"></i>
                                    </span>
                                </a>
                            </p>
                            <p class="buttons">
                                <a class="button">
                                    <span class="icon">
                                        <i class="fa fa-github"></i>
                                    </span>
                                    <span>GitHub</span>
                                </a>
                                <a class="button is-primary">
                                    <span class="icon">
                                        <i class="fa fa-twitter"></i>
                                    </span>
                                    <span>Twitter</span>
                                </a>
                                <a class="button is-success">
                                    <span class="icon is-small">
                                        <i class="fa fa-check"></i>
                                    </span>
                                    <span>Save</span>
                                </a>
                                <a class="button is-danger is-outlined">
                                    <span>Delete</span>
                                    <span class="icon is-small">
                                        <i class="fa fa-times"></i>
                                    </span>
                                </a>
                            </p>
                            <p class="buttons">
                                <a class="button is-small">
                                    <span class="icon is-small">
                                        <i class="fa fa-github"></i>
                                    </span>
                                    <span>GitHub</span>
                                </a>
                                <a class="button">
                                    <span class="icon">
                                        <i class="fa fa-github"></i>
                                    </span>
                                    <span>GitHub</span>
                                </a>
                                <a class="button is-medium">
                                    <span class="icon">
                                        <i class="fa fa-github"></i>
                                    </span>
                                    <span>GitHub</span>
                                </a>
                                <a class="button is-large">
                                    <span class="icon is-medium">
                                        <i class="fa fa-github"></i>
                                    </span>
                                    <span>GitHub</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">Progress Bars</p>

                        <progress class="progress is-primary" value="15" max="100">15%</progress>
                        <progress class="progress is-link" value="30" max="100">30%</progress>
                        <progress class="progress is-info" value="45" max="100">45%</progress>
                        <progress class="progress is-success" value="60" max="100">60%</progress>
                        <progress class="progress is-warning" value="75" max="100">75%</progress>
                        <progress class="progress is-danger" value="90" max="100">90%</progress>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">Tags</p>
                        <div class="row-item">
                            <span class="tag is-black">Black</span>
                            <span class="tag is-dark">Dark</span>
                            <span class="tag is-light">Light</span>
                            <span class="tag is-white">White</span>
                            <span class="tag is-primary">Primary</span>
                            <span class="tag is-link">Link</span>
                            <span class="tag is-info">Info</span>
                            <span class="tag is-success">Success</span>
                            <span class="tag is-warning">Warning</span>
                            <span class="tag is-danger">Danger</span>
                        </div>
                        <div class="row-item">
                            <div class="field is-grouped is-grouped-multiline">
                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-dark">npm</span>
                                        <span class="tag is-info">0.5.0</span>
                                    </div>
                                </div>

                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-dark">build</span>
                                        <span class="tag is-success">passing</span>
                                    </div>
                                </div>

                                <div class="control">
                                    <div class="tags has-addons">
                                        <span class="tag is-dark">chat</span>
                                        <span class="tag is-primary">on gitter</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row-item">
                            <div class="field is-grouped is-grouped-multiline">
                                <div class="control">
                                    <div class="tags has-addons">
                                        <a class="tag is-link">Technology</a>
                                        <a class="tag is-delete"></a>
                                    </div>
                                </div>

                                <div class="control">
                                    <div class="tags has-addons">
                                        <a class="tag is-link">CSS</a>
                                        <a class="tag is-delete"></a>
                                    </div>
                                </div>

                                <div class="control">
                                    <div class="tags has-addons">
                                        <a class="tag is-link">Flexbox</a>
                                        <a class="tag is-delete"></a>
                                    </div>
                                </div>

                                <div class="control">
                                    <div class="tags has-addons">
                                        <a class="tag is-link">Web Design</a>
                                        <a class="tag is-delete"></a>
                                    </div>
                                </div>

                                <div class="control">
                                    <div class="tags has-addons">
                                        <a class="tag is-link">Open Source</a>
                                        <a class="tag is-delete"></a>
                                    </div>
                                </div>

                                <div class="control">
                                    <div class="tags has-addons">
                                        <a class="tag is-link">Community</a>
                                        <a class="tag is-delete"></a>
                                    </div>
                                </div>

                                <div class="control">
                                    <div class="tags has-addons">
                                        <a class="tag is-link">Documentation</a>
                                        <a class="tag is-delete"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">Icons</p>
                        <div class="row-item">
                            <span class="icon has-text-info">
                                <i class="fa fa-info-circle"></i>
                            </span>
                            <span class="icon has-text-success">
                                <i class="fa fa-check-square"></i>
                            </span>
                            <span class="icon has-text-warning">
                                <i class="fa fa-exclamation-triangle"></i>
                            </span>
                            <span class="icon has-text-danger">
                                <i class="fa fa-ban"></i>
                            </span>
                        </div>

                        <div class="row-item">
                            <span class="icon is-medium has-text-info">
                                <i class="fa fa-lg fa-info-circle"></i>
                            </span>
                            <span class="icon is-medium has-text-success">
                                <i class="fa fa-lg fa-check-square"></i>
                            </span>
                            <span class="icon is-medium has-text-warning">
                                <i class="fa fa-lg fa-exclamation-triangle"></i>
                            </span>
                            <span class="icon is-medium has-text-danger">
                                <i class="fa fa-lg fa-ban"></i>
                            </span>
                        </div>

                        <div class="row-item">
                            <span class="icon is-large has-text-info">
                                <i class="fa fa-3x fa-info-circle"></i>
                            </span>
                            <span class="icon is-large has-text-success">
                                <i class="fa fa-3x fa-check-square"></i>
                            </span>
                            <span class="icon is-large has-text-warning">
                                <i class="fa fa-3x fa-exclamation-triangle"></i>
                            </span>
                            <span class="icon is-large has-text-danger">
                                <i class="fa fa-3x fa-ban"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">Notifications</p>
                        <div class="notification is-primary">
                            <button class="delete"></button>
                            Primar lorem ipsum dolor sit amet, consectetur
                            adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis
                            placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida
                            purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
                            consectetur adipiscing elit
                        </div>

                        <div class="notification is-link">
                            <button class="delete"></button>
                            Primar lorem ipsum dolor sit amet, consectetur
                            adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis
                            placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida
                            purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
                            consectetur adipiscing elit
                        </div>

                        <div class="notification is-info">
                            <button class="delete"></button>
                            Primar lorem ipsum dolor sit amet, consectetur
                            adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis
                            placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida
                            purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
                            consectetur adipiscing elit
                        </div>

                        <div class="notification is-success">
                            <button class="delete"></button>
                            Primar lorem ipsum dolor sit amet, consectetur
                            adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis
                            placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida
                            purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
                            consectetur adipiscing elit
                        </div>

                        <div class="notification is-warning">
                            <button class="delete"></button>
                            Primar lorem ipsum dolor sit amet, consectetur
                            adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis
                            placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida
                            purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
                            consectetur adipiscing elit
                        </div>

                        <div class="notification is-danger">
                            <button class="delete"></button>
                            Primar lorem ipsum dolor sit amet, consectetur
                            adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis
                            placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida
                            purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
                            consectetur adipiscing elit
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <p class="title is-4">Table</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><abbr title="Position">Pos</abbr></th>
                                    <th>Team</th>
                                    <th><abbr title="Played">Pld</abbr></th>
                                    <th><abbr title="Won">W</abbr></th>
                                    <th><abbr title="Drawn">D</abbr></th>
                                    <th><abbr title="Lost">L</abbr></th>
                                    <th><abbr title="Goals for">GF</abbr></th>
                                    <th><abbr title="Goals against">GA</abbr></th>
                                    <th><abbr title="Goal difference">GD</abbr></th>
                                    <th><abbr title="Points">Pts</abbr></th>
                                    <th>Qualification or relegation</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th><abbr title="Position">Pos</abbr></th>
                                    <th>Team</th>
                                    <th><abbr title="Played">Pld</abbr></th>
                                    <th><abbr title="Won">W</abbr></th>
                                    <th><abbr title="Drawn">D</abbr></th>
                                    <th><abbr title="Lost">L</abbr></th>
                                    <th><abbr title="Goals for">GF</abbr></th>
                                    <th><abbr title="Goals against">GA</abbr></th>
                                    <th><abbr title="Goal difference">GD</abbr></th>
                                    <th><abbr title="Points">Pts</abbr></th>
                                    <th>Qualification or relegation</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C."
                                            title="Leicester City F.C.">Leicester City</a> <strong>(C)</strong>
                                    </td>
                                    <td>38</td>
                                    <td>23</td>
                                    <td>12</td>
                                    <td>3</td>
                                    <td>68</td>
                                    <td>36</td>
                                    <td>+32</td>
                                    <td>81</td>
                                    <td>Qualification for the <a
                                            href="https://en.wikipedia.org/wiki/2016–17_UEFA_Champions_League#Group_stage"
                                            title="2016–17 UEFA Champions League">Champions League group stage</a></td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Arsenal_F.C."
                                            title="Arsenal F.C.">Arsenal</a></td>
                                    <td>38</td>
                                    <td>20</td>
                                    <td>11</td>
                                    <td>7</td>
                                    <td>65</td>
                                    <td>36</td>
                                    <td>+29</td>
                                    <td>71</td>
                                    <td>Qualification for the <a
                                            href="https://en.wikipedia.org/wiki/2016–17_UEFA_Champions_League#Group_stage"
                                            title="2016–17 UEFA Champions League">Champions League group stage</a></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Tottenham_Hotspur_F.C."
                                            title="Tottenham Hotspur F.C.">Tottenham Hotspur</a></td>
                                    <td>38</td>
                                    <td>19</td>
                                    <td>13</td>
                                    <td>6</td>
                                    <td>69</td>
                                    <td>35</td>
                                    <td>+34</td>
                                    <td>70</td>
                                    <td>Qualification for the <a
                                            href="https://en.wikipedia.org/wiki/2016–17_UEFA_Champions_League#Group_stage"
                                            title="2016–17 UEFA Champions League">Champions League group stage</a></td>
                                </tr>
                                <tr class="is-selected">
                                    <th>4</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Manchester_City_F.C."
                                            title="Manchester City F.C.">Manchester City</a></td>
                                    <td>38</td>
                                    <td>19</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>71</td>
                                    <td>41</td>
                                    <td>+30</td>
                                    <td>66</td>
                                    <td>Qualification for the <a
                                            href="https://en.wikipedia.org/wiki/2016–17_UEFA_Champions_League#Play-off_round"
                                            title="2016–17 UEFA Champions League">Champions League play-off round</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Manchester_United_F.C."
                                            title="Manchester United F.C.">Manchester United</a></td>
                                    <td>38</td>
                                    <td>19</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>49</td>
                                    <td>35</td>
                                    <td>+14</td>
                                    <td>66</td>
                                    <td>Qualification for the <a
                                            href="https://en.wikipedia.org/wiki/2016–17_UEFA_Europa_League#Group_stage"
                                            title="2016–17 UEFA Europa League">Europa League group stage</a></td>
                                </tr>
                                <tr>
                                    <th>6</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Southampton_F.C."
                                            title="Southampton F.C.">Southampton</a></td>
                                    <td>38</td>
                                    <td>18</td>
                                    <td>9</td>
                                    <td>11</td>
                                    <td>59</td>
                                    <td>41</td>
                                    <td>+18</td>
                                    <td>63</td>
                                    <td>Qualification for the <a
                                            href="https://en.wikipedia.org/wiki/2016–17_UEFA_Europa_League#Group_stage"
                                            title="2016–17 UEFA Europa League">Europa League group stage</a></td>
                                </tr>
                                <tr>
                                    <th>7</th>
                                    <td><a href="https://en.wikipedia.org/wiki/West_Ham_United_F.C."
                                            title="West Ham United F.C.">West Ham United</a></td>
                                    <td>38</td>
                                    <td>16</td>
                                    <td>14</td>
                                    <td>8</td>
                                    <td>65</td>
                                    <td>51</td>
                                    <td>+14</td>
                                    <td>62</td>
                                    <td>Qualification for the <a
                                            href="https://en.wikipedia.org/wiki/2016–17_UEFA_Europa_League#Third_qualifying_round"
                                            title="2016–17 UEFA Europa League">Europa League third qualifying round</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Liverpool_F.C."
                                            title="Liverpool F.C.">Liverpool</a></td>
                                    <td>38</td>
                                    <td>16</td>
                                    <td>12</td>
                                    <td>10</td>
                                    <td>63</td>
                                    <td>50</td>
                                    <td>+13</td>
                                    <td>60</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>9</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Stoke_City_F.C."
                                            title="Stoke City F.C.">Stoke City</a></td>
                                    <td>38</td>
                                    <td>14</td>
                                    <td>9</td>
                                    <td>15</td>
                                    <td>41</td>
                                    <td>55</td>
                                    <td>−14</td>
                                    <td>51</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>10</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Chelsea_F.C."
                                            title="Chelsea F.C.">Chelsea</a></td>
                                    <td>38</td>
                                    <td>12</td>
                                    <td>14</td>
                                    <td>12</td>
                                    <td>59</td>
                                    <td>53</td>
                                    <td>+6</td>
                                    <td>50</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>11</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Everton_F.C."
                                            title="Everton F.C.">Everton</a></td>
                                    <td>38</td>
                                    <td>11</td>
                                    <td>14</td>
                                    <td>13</td>
                                    <td>59</td>
                                    <td>55</td>
                                    <td>+4</td>
                                    <td>47</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>12</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Swansea_City_A.F.C."
                                            title="Swansea City A.F.C.">Swansea City</a></td>
                                    <td>38</td>
                                    <td>12</td>
                                    <td>11</td>
                                    <td>15</td>
                                    <td>42</td>
                                    <td>52</td>
                                    <td>−10</td>
                                    <td>47</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>13</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Watford_F.C."
                                            title="Watford F.C.">Watford</a></td>
                                    <td>38</td>
                                    <td>12</td>
                                    <td>9</td>
                                    <td>17</td>
                                    <td>40</td>
                                    <td>50</td>
                                    <td>−10</td>
                                    <td>45</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>14</th>
                                    <td><a href="https://en.wikipedia.org/wiki/West_Bromwich_Albion_F.C."
                                            title="West Bromwich Albion F.C.">West Bromwich Albion</a></td>
                                    <td>38</td>
                                    <td>10</td>
                                    <td>13</td>
                                    <td>15</td>
                                    <td>34</td>
                                    <td>48</td>
                                    <td>−14</td>
                                    <td>43</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>15</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Crystal_Palace_F.C."
                                            title="Crystal Palace F.C.">Crystal Palace</a></td>
                                    <td>38</td>
                                    <td>11</td>
                                    <td>9</td>
                                    <td>18</td>
                                    <td>39</td>
                                    <td>51</td>
                                    <td>−12</td>
                                    <td>42</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>16</th>
                                    <td><a href="https://en.wikipedia.org/wiki/A.F.C._Bournemouth"
                                            title="A.F.C. Bournemouth">AFC Bournemouth</a></td>
                                    <td>38</td>
                                    <td>11</td>
                                    <td>9</td>
                                    <td>18</td>
                                    <td>45</td>
                                    <td>67</td>
                                    <td>−22</td>
                                    <td>42</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>17</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Sunderland_A.F.C."
                                            title="Sunderland A.F.C.">Sunderland</a></td>
                                    <td>38</td>
                                    <td>9</td>
                                    <td>12</td>
                                    <td>17</td>
                                    <td>48</td>
                                    <td>62</td>
                                    <td>−14</td>
                                    <td>39</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>18</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Newcastle_United_F.C."
                                            title="Newcastle United F.C.">Newcastle United</a> <strong>(R)</strong>
                                    </td>
                                    <td>38</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>19</td>
                                    <td>44</td>
                                    <td>65</td>
                                    <td>−21</td>
                                    <td>37</td>
                                    <td>Relegation to the <a
                                            href="https://en.wikipedia.org/wiki/2016–17_Football_League_Championship"
                                            title="2016–17 Football League Championship">Football League
                                            Championship</a></td>
                                </tr>
                                <tr>
                                    <th>19</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Norwich_City_F.C."
                                            title="Norwich City F.C.">Norwich City</a> <strong>(R)</strong>
                                    </td>
                                    <td>38</td>
                                    <td>9</td>
                                    <td>7</td>
                                    <td>22</td>
                                    <td>39</td>
                                    <td>67</td>
                                    <td>−28</td>
                                    <td>34</td>
                                    <td>Relegation to the <a
                                            href="https://en.wikipedia.org/wiki/2016–17_Football_League_Championship"
                                            title="2016–17 Football League Championship">Football League
                                            Championship</a></td>
                                </tr>
                                <tr>
                                    <th>20</th>
                                    <td><a href="https://en.wikipedia.org/wiki/Aston_Villa_F.C."
                                            title="Aston Villa F.C.">Aston Villa</a> <strong>(R)</strong>
                                    </td>
                                    <td>38</td>
                                    <td>3</td>
                                    <td>8</td>
                                    <td>27</td>
                                    <td>27</td>
                                    <td>76</td>
                                    <td>−49</td>
                                    <td>17</td>
                                    <td>Relegation to the <a
                                            href="https://en.wikipedia.org/wiki/2016–17_Football_League_Championship"
                                            title="2016–17 Football League Championship">Football League
                                            Championship</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>


<?= $this->endSection()?>


            

<?= $this->section('scripts')?>
<script>
        $(document).ready(function() {
            let bar = {
                type: 'bar',
                height: 40,
                barWidth: 4,
                barColor: '#fff',
                barSpacing: 3
            };

            let line = {
                type: 'line',
                width: 150,//73
                height: 36,
                lineColor: '#fff',
                fillColor: 'rgba(0,0,0,0)',
                lineWidth: 2,
                maxSpotColor: 'rgba(255,255,255,0.4)',
                minSpotColor: 'rgba(255,255,255,0.4)',
                spotColor: 'rgba(255,255,255,0.4)',
                spotRadius: 3,
                highlightSpotColor: '#fff',
                highlightLineColor: 'rgba(255,255,255,0.4)'
            };
            // $(item).find('.sparkline-bar-stats').sparkline('html', chart === 'bar' ? bar : line);
            
            function data() {
                return Array.from({length: 22}, () => Math.floor(Math.random() * 40));
            }

            $('.inlinesparkline-bar').each(function() {
                $(this).sparkline(data(), bar);
            });

            $('.inlinesparkline-line').each(function() {
                $(this).sparkline(data(), line);
            });

            var ctx1 = document.getElementById('chart2').getContext('2d');
            window.myBar = new Chart(ctx1, {
                type: 'bar',
                data: {
                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                    "datasets": [{
                        "label": "Dataset 1",
                        "backgroundColor": "rgb(255, 99, 132)",
                        "stack": "Stack 0",
                        "data": [-49, -7, -21, 23, 76, -29, 0]
                    }, {
                        "label": "Dataset 2",
                        "backgroundColor": "rgb(54, 162, 235)",
                        "stack": "Stack 0",
                        "data": [25, -77, -35, -77, -81, 2, 54]
                    }, {
                        "label": "Dataset 3",
                        "backgroundColor": "rgb(75, 192, 192)",
                        "stack": "Stack 1",
                        "data": [43, -6, -98, -22, 24, -51, 6]
                    }]
                },
                options: {
                    title: {
                        display: false,
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    },
                    legend: {
                        display: false
                    },
                }
            });

            var ctx2 = document.getElementById('chart1').getContext('2d');
            window.myLine = new Chart(ctx2, {
                type: 'line',
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                    datasets: [{
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [-60.21, 67.03, -66.63, 97.27, -39.65, 6.71, 6.14, 98.68],
                        label: 'Dataset',
                        fill: 'start'
                    }]
                },
                options: {
                    title: {
                        display: false
                    },
                    legend: {
                        display: false
                    },
                }
            });
        });
    </script>
<?= $this->endSection()?>