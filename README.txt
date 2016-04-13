###############################################################################
Interface Template for Web-based Subjective Video Quality Experiments using Paired Comparison
###############################################################################

--------------- LICENSE ---------------
This work is licensed under a Creative Commons Attribution 4.0 International License.

THIS SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL THE AUTHORS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

ANY USE OF THIS OF THIS SOFTWARE MUST BE PROPERLY REFERENCED, AND THE FOLLOWING PUBLICATION MUST BE CITED:

"Crowdsourcing based subjective quality assessment of adaptive video streaming", M. Shahid, J. Søgaard, J. Pokhrel, K. Brunnström, K. Wang, and S. Tavakoli, QoMEX 2014 (Accepted)

--------------- FUNCTIONALITY ---------------
This software provides a web interface template for Paired Comparisons. The template is written in PHP and requires javascript. Video playback has been implemented according to the HTML5 standard and can be played in all modern major browsers except Opera. The input videos are assumed to be in 720p and to be stored in the MP4 container format. The interface communicates with a SQL database to store the information.

The main pages of the interface consist of an introduction page, a test loop and an end page. Most pages assumes that a unique id is passed as a variable in the url. Screenshots of the platform can be found in the screenshots folder. The PHP scripts are:

# index.php #
Contains brief instructions, a screentest (https://github.com/St1c/screentest) for quality control and a small survey. Behind the scenes different checks are made (e.g. is javascript enabled) and the first pair of videos is preloaded to ensure uninterrupted playback. Also the sequence of the video pairs is randomly determined (the interface currently contains 14 different tracks of sequences with 9 video pairs in each).

# insert.php #
Called by the index.php page to insert the subject information, test information, and survey answers.

# screentest.php #
See https://github.com/St1c/screentest

# end.php #
Last page of the interface, providing the subject with a unique code, which can be used as proof.

# reconnect.php #
If the subject disconnects in the middle of a test sequence and later reconnects, the index.php page will send them here. This page reloads the pair of videos where the subject left off, so they can continue the test.

# status.php #
Intended for the creators of the subjective experiment and not the subjects. Shows the current progress of the subjective experiment.

# dbinfo.inc.php #
Contains database and feedback url information. See installation.

/TESTS

    # test1.php #
    First page of the test loop. Displays the first video of the current video pair.

    # test2.php #
    Second page of the test loop. Displays the second video of the current video pair.

    # test3.php #
    Third page of the test loop. The subject is asked to state their preference of the video pair and a control question might also be displayed. (The interface currently contains 3 control questions out of 9 video pairs).

    # insert.php #
    Called by test3.php to store answers and update test sequence information.

    # insertVidTime.php #
    Called by test1.php and test2.php to update information about the total viewing time of each video.

/ERRORS

    # continent.php #
    If the the IP of the subject is determined to be from an origin not allowed in the test index.php will redirect to this error page. This is not currently in use.

    # javascript.php #
    If javascript is disabled index.php will redirect to this error page.

    # noid.php #
    If no id is passed in the url to index.php the subject will be redirected to this error page.

    # resolution.php #
    If the resolution of the subject's browser window is determined to be too small to view the videos index.php will redirect to this page.

    # screentestfail.php #
    If subject gets a very poor score on the screentest index.php will redirect to this page.
    
/INSTRUCTION

    # instruction.php #
    The index.php, end.php, and every page in the test loop contains a link to this page with more detailed instruction for each step in the experiment.


--------------- INSTALLATION ---------------
The interface requires a web server supporting PHP and mySQL. To install the interface follow these steps:

 - Copy the files and folders to your web server. 
 - Import the SQL template in the sql folder to your database. 
 - Edit dbinfo.inc.php so that is contains the information of your database and an url to where the subjects can leave feedback (assumed to be a forum thread). 
 - The test version of the interface should now be working. To customize, edit the database and scripts where needed, and add your test videos.

Note: Since some parameters are defined directly in the code, some knowledge of PHP might be required to use this tool. This might be addressed in future updates.
 
When conducting a subjective experiment:
 - Give each subject a unique url to the interface e.g. YOURDOMAIN.COM/index.php?id=ID, where ID is a unique subject ID.
 - Track the progress of the experiment using the status page i.e. YOURDOMAIN.COM/status.php.
 - Export experiment data from the database

--------------- FEEDBACK ---------------
If you got questions, feedback, or suggestions for improvements please e-mail: jsog at fotonik.dtu.dk.