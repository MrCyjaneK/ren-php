 
  --------------------------------------------------
 | mmmmm                  m    mmmmm  m    m mmmmm  |
 | #   "#  mmm   m mm     #    #   "# #    # #   "# |
 | #mmmm" #"  #  #"  #         #mmm#" #mmmm# #mmm#" |
 | #   "m #""""  #   #         #      #    # #      |
 | #    " "#mm"  #   #         #      #    # #      |
  -------------| Visual Novel engine written in php |
                ------------------------------------

Live demo can be found at oldpc.mrcyjanek.net/in/


If you want to edit content open 'data.php' file

I've used 'define('ME', 'Czarek Nakamoto');' to 
define my username and 'define('YOU', 'You');'
to define your username, to make sure that I'll
not make any spelling mistakes, and it will be
easy for me to change character's name in future.

Then I've used following function to add content

scenario_add('entry', YOU, "Hello", ["entry0" => "-->"], "./static/default.jpg");
             |        |    |        |                    |
             |        |    |        |                    \ Link to image.
             |        |    |        \ Array of answers in format of scene -> text
             |        |    \___ Text to display
             |        \___ Name of character, defined earlier
             \___ Name of scene (entry is first one)
