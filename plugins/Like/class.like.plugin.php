<?php if (!defined('APPLICATION')) exit();

// Define the plugin:
$PluginInfo['Like'] = array(
   'Name' => 'Like',
   'Description' => 'Adds the facebook like button and a share button to the discussion.Based on Gary Mardell Liked plugin',
   'Version' => '1.2',
   'MobileFriendly' => true,
   'Author' => "VrijVlinder",
   'AuthorEmail' => 'contact@vrijvlinder.com',
   'AuthorUrl' => 'http://www.vrijvlinder.com'
);

   
class LikePlugin extends Gdn_Plugin {

		
	private $Code = '<div style="float: right; margin-top:0; z-index: 999; position: relative"><fb:like href="%s" layout="button_count" width="60" show_faces="false" font="lucida grande"></fb:like></div>';
	   
	public function DiscussionController_Render_Before($Sender) {
		$Discussion = GetValue('Discussion', $Sender, FALSE);
		if (is_object($Discussion)) {
			$Sender->Head->AddTag('meta', array('content' => Gdn_Format::Text($Sender->Discussion->Name), 'property' => 'og:title'));
			$Sender->Head->AddTag('meta', array('content' => Gdn_Url::Request(true, true, true), 'property' => 'og:url'));
			$Sender->Head->AddTag('meta', array('content' => C('Garden.Title'), 'property' => 'og:site_name'));
			$Sender->Head->AddTag('meta', array('content' => 'article', 'property' => 'og:type'));
			$Sender->AddJsFile('http://connect.facebook.net/en_US/all.js#xfbml=1');
		}
	}
	
	public function DiscussionController_AfterDiscussionBody_Handler($Sender) {
		echo sprintf($this->Code, Gdn_Url::Request(true, true, true));
	}

   public function Setup() {
      // No setup required.
   }
}