<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'forum', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   forum
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['addanewdiscussion'] = 'Add a new discussion topic';
$string['addanewquestion'] = 'Add a new question';
$string['addanewtopic'] = 'Add a new topic';
$string['advancedsearch'] = 'Advanced search';
$string['aggregateavg'] = 'Average of ratings';
$string['aggregatecount'] = 'Count of ratings';
$string['aggregatecountformat'] = '{$a->count} (grade: {$a->grade})';
$string['aggregatemax'] = 'Maximum rating';
$string['aggregatemin'] = 'Minimum rating';
$string['aggregatenone'] = 'No ratings';
$string['aggregatesum'] = 'Sum of ratings';
$string['aggregatetype'] = 'Aggregate type';
$string['aggregatetype_help'] = 'Forum aggregation defines how all the ratings given to posts in a forum are combined to form the final grade (for each post and for the whole forum activity).

There are 5 aggregate types:

* Average - The mean of all the ratings given to posts in the forum (useful with peer grading when there are a lot of ratings being made)
* Count - The number of rated posts becomes the final grade (useful when the number of posts is important). Note that the total cannot exceed the maximum grade for the forum.
* Max - The highest rating is returned as the final grade (useful for emphasising the best post)
* Min - The smallest rating is returned as the final grade (for promoting a culture of high quality for all posts)
* Sum - All ratings for a particular student are added together. Note that the total cannot exceed the maximum grade for the forum.

If "No ratings" is selected, then the forum activity will not appear in the gradebook.';
$string['ajaxrating'] = 'Enable AJAX rating';
$string['allforums'] = 'All forums';
$string['allowdiscussions'] = 'Can a {$a} post to this forum?';
$string['allowratings'] = 'Allow posts to be rated?';
$string['allowsallsubscribe'] = 'This forum allows everyone to choose whether to subscribe or not';
$string['allowsdiscussions'] = 'This forum allows each person to start one discussion topic.';
$string['allsubscribe'] = 'Subscribe to all forums';
$string['allunsubscribe'] = 'Unsubscribe from all forums';
$string['alreadyfirstpost'] = 'This is already the first post in the discussion';
$string['anyfile'] = 'Any file';
$string['attachment'] = 'Attachment';
$string['attachment_help'] = 'You can optionally attach one or more files to a forum post. If you attach an image, it will be displayed after the message.';
$string['attachmentnopost'] = 'You cannot export attachments without a post id';
$string['attachments'] = 'Attachments';
$string['blockafter'] = 'Post threshold for blocking';
$string['blockafter_help'] = 'This setting specifies the maximum number of posts which a student can post in the given time period.';
$string['blockperiod'] = 'Time period for blocking';
$string['blockperiod_help'] = 'Students can be blocked from posting more than a given number of posts in a given time period. To enable this feature, select a time period in which students cannot post more than a given number of posts.';
$string['blockperioddisabled'] = 'Don\'t block';
$string['blogforum'] = 'Standard forum displayed in a blog-like format';
$string['bynameondate'] = 'by {$a->name} - {$a->date}';
$string['cannotadd'] = 'Could not add the discussion for this forum';
$string['cannotadddiscussion'] = 'Adding discussions to this forum requires group membership.';
$string['cannotadddiscussionall'] = 'You do not have permission to add a new discussion topic for all participants.';
$string['cannotaddsubscriber'] = 'Could not add subscriber with id {$a} to this forum!';
$string['cannotaddteacherforumto'] = 'Could not add converted teacher forum instance to section 0 in the course';
$string['cannotcreatediscussion'] = 'Could not create new discussion';
$string['cannotcreateinstanceforteacher'] = 'Could not create new course module instance for the teacher forum';
$string['cannotdeleteforummodule'] = 'You can not delete the forum module.';
$string['cannotdeletepost'] = 'You can\'t delete this post!';
$string['cannoteditposts'] = 'You can\'t edit other people\'s posts!';
$string['cannotfinddiscussion'] = 'Could not find the discussion in this forum';
$string['cannotfindfirstpost'] = 'Could not find the first post in this forum';
$string['cannotfindorcreateforum'] = 'Could not find or create a main news forum for the site';
$string['cannotfindparentpost'] = 'Could not find top parent of post {$a}';
$string['cannotmovefromsingleforum'] = 'Cannot move discussion from a simple single discussion forum';
$string['cannotmovenotvisible'] = 'Forum not visible';
$string['cannotmovetonotexist'] = 'You can\'t move to that forum - it doesn\'t exist!';
$string['cannotmovetonotfound'] = 'Target forum not found in this course.';
$string['cannotpurgecachedrss'] = 'Could not purge the cached RSS feeds for the source and/or destination forum(s) - check your file permissionsforums';
$string['cannotremovesubscriber'] = 'Could not remove subscriber with id {$a} from this forum!';
$string['cannotreply'] = 'You cannot reply to this post';
$string['cannotsplit'] = 'Discussions from this forum cannot be split';
$string['cannotsubscribe'] = 'Sorry, but you must be a group member to subscribe.';
$string['cannottrack'] = 'Could not stop tracking that forum';
$string['cannotunsubscribe'] = 'Could not unsubscribe you from that forum';
$string['cannotupdatepost'] = 'You can not update this post';
$string['cannotviewpostyet'] = 'You cannot read other students questions in this discussion yet because you haven\'t posted';
$string['cleanreadtime'] = 'Mark old posts as read hour';
$string['completiondiscussions'] = 'User must create discussions:';
$string['completiondiscussionsgroup'] = 'Require discussions';
$string['completiondiscussionshelp'] = 'requiring discussions to complete';
$string['completionposts'] = 'User must post discussions or replies:';
$string['completionpostsgroup'] = 'Require posts';
$string['completionpostshelp'] = 'requiring discussions or replies to complete';
$string['completionreplies'] = 'User must post replies:';
$string['completionrepliesgroup'] = 'Require replies';
$string['completionreplieshelp'] = 'requiring replies to complete';
$string['configajaxrating'] = 'AJAX rating is a forum rating usability improvement. If enabled, users can rate forum posts almost instantly without needing to scroll to the bottom of the page and click the \'Send in my latest ratings\' button. This setting also requires AJAX to be enabled for the site and in user profiles.';
$string['configcleanreadtime'] = 'The hour of the day to clean old posts from the \'read\' table.';
$string['configdisplaymode'] = 'The default display mode for discussions if one isn\'t set.';
$string['configenablerssfeeds'] = 'This switch will enable the possibility of RSS feeds for all forums.  You will still need to turn feeds on manually in the settings for each forum.';
$string['configenabletimedposts'] = 'Set to \'yes\' if you want to allow setting of display periods when posting a new forum discussion (Experimental as not yet fully tested)';
$string['configlogblocked'] = 'Forum cron may log blocked attempts to send emails to users with disabled email.';
$string['configlongpost'] = 'Any post over this length (in characters not including HTML) is considered long. Posts displayed on the site front page, social format course pages, or user profiles are shortened to a natural break somewhere between the forum_shortpost and forum_longpost values.';
$string['configmanydiscussions'] = 'Maximum number of discussions shown in a forum per page';
$string['configmaxattachments'] = 'Default maximum number of attachments allowed per post.';
$string['configmaxbytes'] = 'Default maximum size for all forum attachments on the site (subject to course limits and other local settings)';
$string['configoldpostdays'] = 'Number of days old any post is considered read.';
$string['configreplytouser'] = 'When a forum post is mailed out, should it contain the user\'s email address so that recipients can reply personally rather than via the forum? Even if set to \'Yes\' users can choose in their profile to keep their email address secret.';
$string['configshortpost'] = 'Any post under this length (in characters not including HTML) is considered short (see below).';
$string['configtrackreadposts'] = 'Set to \'yes\' if you want to track read/unread for each user.';
$string['configusermarksread'] = 'If \'yes\', the user must manually mark a post as read. If \'no\', when the post is viewed it is marked as read.';
$string['couldnotadd'] = 'Could not add your post due to an unknown error';
$string['couldnotdeleteratings'] = 'Sorry, that cannot be deleted as people have already rated it';
$string['couldnotdeletereplies'] = 'Sorry, that cannot be deleted as people have already responded to it';
$string['couldnotupdate'] = 'Could not update your post due to an unknown error';
$string['delete'] = 'Delete';
$string['deleteddiscussion'] = 'The discussion topic has been deleted';
$string['deletedpost'] = 'The post has been deleted';
$string['deletedposts'] = 'Those posts have been deleted';
$string['deletesure'] = 'Are you sure you want to delete this post?';
$string['deletesureplural'] = 'Are you sure you want to delete this post and all replies? ({$a} posts)';
$string['digestmailheader'] = 'This is your daily digest of new posts from the {$a->sitename} forums. To change your forum email preferences, go to {$a->userprefs}.';
$string['digestmailprefs'] = 'your user profile';
$string['digestmailsubject'] = '{$a}: forum digest';
$string['digestsentusers'] = 'Email digests successfully sent to {$a} users.';
$string['disallowsubscribe'] = 'Subscriptions not allowed';
$string['disallowsubscribeteacher'] = 'Subscriptions not allowed (except for teachers)';
$string['discussion'] = 'Discussion';
$string['discussionmoved'] = 'This discussion has been moved to \'{$a}\'.';
$string['discussionmovedpost'] = 'This discussion has been moved to <a href="{$a->discusshref}">here</a> in the forum <a href="{$a->forumhref}">{$a->forumname}</a>';
$string['discussionname'] = 'Discussion name';
$string['discussions'] = 'Discussions';
$string['discussionsstartedby'] = 'Discussions started by {$a}';
$string['discussionsstartedbyrecent'] = 'Discussions recently started by {$a}';
$string['discussthistopic'] = 'Discuss this topic';
$string['displayend'] = 'Display end';
$string['displayend_help'] = 'This setting specifies whether a forum post should be hidden after a certain date. Note that administrators can always view forum posts.';
$string['displaymode'] = 'Display mode';
$string['displayperiod'] = 'Display period';
$string['displaystart'] = 'Display start';
$string['displaystart_help'] = 'This setting specifies whether a forum post should be displayed from a certain date. Note that administrators can always view forum posts.';
$string['eachuserforum'] = 'Each person posts one discussion';
$string['edit'] = 'Edit';
$string['editedby'] = 'Edited by {$a->name} - original submission {$a->date}';
$string['editing'] = 'Editing';
$string['emptymessage'] = 'Something was wrong with your post.  Perhaps you left it blank, or the attachment was too big.  Your changes have NOT been saved.';
$string['errorwhiledelete'] = 'An error occurred while deleting record.';
$string['everyonecanchoose'] = 'Everyone can choose to be subscribed';
$string['everyonecannowchoose'] = 'Everyone can now choose to be subscribed';
$string['everyoneisnowsubscribed'] = 'Everyone is now subscribed to this forum';
$string['everyoneissubscribed'] = 'Everyone is subscribed to this forum';
$string['existingsubscribers'] = 'Existing subscribers';
$string['forcessubscribe'] = 'This forum forces everyone to be subscribed';
$string['forum'] = 'Forum';
$string['forum:addnews'] = 'Add news';
$string['forumadministration'] = 'Forum Administration';
$string['forumauthorhidden'] = 'Author (hidden)';
$string['forumblockingalmosttoomanyposts'] = 'You are approaching the posting threshold. You have posted {$a->numposts} times in the last {$a->blockperiod} and the limit is {$a->blockafter} posts.';
$string['forumbodyhidden'] = 'This post cannot be viewed by you, probably because you have not posted in the discussion yet.';
$string['forum:createattachment'] = 'Create attachments';
$string['forum:deleteanypost'] = 'Delete any posts (anytime)';
$string['forum:deleteownpost'] = 'Delete own posts (within deadline)';
$string['forum:editanypost'] = 'Edit any post';
$string['forum:exportdiscussion'] = 'Export whole discussion';
$string['forum:exportownpost'] = 'Export own post';
$string['forum:exportpost'] = 'Export post';
$string['forum:initialsubscriptions'] = 'Initial subscription';
$string['forumintro'] = 'Forum introduction';
$string['forum:managesubscriptions'] = 'Manage subscriptions';
$string['forum:movediscussions'] = 'Move discussions';
$string['forumname'] = 'Forum name';
$string['forumposts'] = 'Forum posts';
$string['forum:rate'] = 'Rate posts';
$string['forum:replynews'] = 'Reply to news';
$string['forum:replypost'] = 'Reply to posts';
$string['forums'] = 'Forums';
$string['forum:splitdiscussions'] = 'Split discussions';
$string['forum:startdiscussion'] = 'Start new discussions';
$string['forumsubjecthidden'] = 'Subject (hidden)';
$string['forum:throttlingapplies'] = 'Throttling applies';
$string['forumtracked'] = 'Unread posts are being tracked';
$string['forumtrackednot'] = 'Unread posts are not being tracked';
$string['forumtype'] = 'Forum type';
$string['forumtype_help'] = 'There are 5 forum types:

* A single simple discussion - A single discussion topic which everyone can reply to
* Each person posts one discussion - Each student can post exactly one new discussion topic, which everyone can then reply to
* Q and A forum - Students must first post their perspectives before viewing other students\' posts
* Standard forum displayed in a blog-like format - An open forum where anyone can start a new discussion at any time, and in which discussion topics are displayed on one page with "Discuss this topic" links
* Standard forum for general use - An open forum where anyone can start a new discussion at any time';
$string['forum:viewallratings'] = 'View all raw ratings given by individuals';
$string['forum:viewanyrating'] = 'View total ratings that anyone received';
$string['forum:viewdiscussion'] = 'View discussions';
$string['forum:viewhiddentimedposts'] = 'View hidden timed posts';
$string['forum:viewqandawithoutposting'] = 'Always see Q and A posts';
$string['forum:viewrating'] = 'View the total rating you received';
$string['forum:viewsubscribers'] = 'View subscribers';
$string['generalforum'] = 'Standard forum for general use';
$string['generalforums'] = 'General forums';
$string['inforum'] = 'in {$a}';
$string['introblog'] = 'The posts in this forum were copied here automatically from blogs of users in this course because those blog entries are no longer available';
$string['intronews'] = 'General news and announcements';
$string['introsocial'] = 'An open forum for chatting about anything you want to';
$string['introteacher'] = 'A forum for teacher-only notes and discussion';
$string['invalidaccess'] = 'This page was not accessed correctly';
$string['invaliddiscussionid'] = 'Discussion ID was incorrect or no longer exists';
$string['invalidforcesubscribe'] = 'Invalid force subscription mode';
$string['invalidforumid'] = 'Forum ID was incorrect';
$string['invalidparentpostid'] = 'Parent post ID was incorrect';
$string['invalidpostid'] = 'Invalid Post ID - {$a}';
$string['invalidrate'] = 'Invalid rate ({$a})';
$string['lastpost'] = 'Last post';
$string['learningforums'] = 'Learning forums';
$string['logblocked'] = 'Log blocked emails';
$string['longpost'] = 'Long post';
$string['mailnow'] = 'Mail now';
$string['manydiscussions'] = 'Discussions per page';
$string['markalldread'] = 'Mark all posts in this discussion read.';
$string['markallread'] = 'Mark all posts in this forum read.';
$string['markread'] = 'Mark read';
$string['markreadbutton'] = 'Mark<br />read';
$string['markunread'] = 'Mark unread';
$string['markunreadbutton'] = 'Mark<br />unread';
$string['maxattachments'] = 'Maximum number of attachments';
$string['maxattachments_help'] = 'This setting specifies the maximum number of files that can be attached to a forum post.';
$string['maxattachmentsize'] = 'Maximum attachment size';
$string['maxattachmentsize_help'] = 'This setting specifies the largest size of file that can be attached to a forum post.';
$string['maxtimehaspassed'] = 'Sorry, but the maximum time for editing this post ({$a}) has passed!';
$string['message'] = 'Message';
$string['messageprovider:digests'] = 'Subscribed forum digests';
$string['messageprovider:posts'] = 'Subscribed forum posts';
$string['missingsearchterms'] = 'The following search terms occur only in the HTML markup of this message:';
$string['modeflatnewestfirst'] = 'Display replies flat, with newest first';
$string['modeflatoldestfirst'] = 'Display replies flat, with oldest first';
$string['modenested'] = 'Display replies in nested form';
$string['modethreaded'] = 'Display replies in threaded form';
$string['modulename'] = 'Forum';
$string['modulename_help'] = 'The forum module enables participants to have asynchronous discussions.';
$string['modulenameplural'] = 'Forums';
$string['more'] = 'more';
$string['movedmarker'] = '(Moved)';
$string['movethisdiscussionto'] = 'Move this discussion to ...';
$string['mustprovidediscussionorpost'] = 'You must provide either a discussion id or post id to export';
$string['namenews'] = 'News forum';
$string['namenews_help'] = 'The news forum is a special forum for announcements that is automatically created when a course is created. A course can have only one news forum. Only teachers and administrators can post in the news forum. The "Latest news" block will display recent discussions from the news forum.';
$string['namesocial'] = 'Social forum';
$string['nameteacher'] = 'Teacher forum';
$string['newforumposts'] = 'New forum posts';
$string['noattachments'] = 'There are no attachments to this post';
$string['nodiscussions'] = 'There are no discussion topics yet in this forum';
$string['nodiscussionsstartedby'] = 'No discussions started by this user';
$string['noguestpost'] = 'Sorry, guests are not allowed to post. {$a}';
$string['noguestrate'] = 'Guests are not allowed to rate entries.';
$string['noguestsubscribe'] = 'Sorry, guests are not allowed to subscribe to receive forum postings by email.';
$string['noguesttracking'] = 'Sorry, guests are not allowed to set tracking options.';
$string['nomorepostscontaining'] = 'No more posts containing \'{$a}\' were found';
$string['nonews'] = 'No news has been posted yet';
$string['noonecansubscribenow'] = 'Subscriptions are now disallowed';
$string['nopermissiontosubscribe'] = 'You do not have the permission to view forum subscribers';
$string['nopermissiontoview'] = 'You do not have permissions to view this post';
$string['nopostforum'] = 'Sorry, you are not allowed to post to this forum';
$string['noposts'] = 'No posts';
$string['nopostscontaining'] = 'No posts containing \'{$a}\' were found';
$string['noquestions'] = 'There are no questions yet in this forum';
$string['norate'] = 'Rating of items not allowed!';
$string['noratinggiven'] = 'No rating given';
$string['noresult'] = 'No ratings for this post: {$a}';
$string['nosubscribers'] = 'There are no subscribers yet for this forum';
$string['notexists'] = 'Discussion no longer exists';
$string['nothingnew'] = 'Nothing new for {$a}';
$string['notingroup'] = 'Sorry, but you need to be part of a group to see this forum.';
$string['notinstalled'] = 'The forum module is not installed';
$string['notpartofdiscussion'] = 'This post is not part of a discussion!';
$string['notrackforum'] = 'Don\'t track unread posts';
$string['noviewanyrate'] = 'You can only look at results for posts that you made';
$string['noviewdiscussionspermission'] = 'You do not have the permission to view discussions in this forum';
$string['noviewrate'] = 'You do not have the capability to view post ratings';
$string['nowallsubscribed'] = 'All forums in {$a} are subscribed.';
$string['nowallunsubscribed'] = 'All forums in {$a} are not subscribed.';
$string['nownotsubscribed'] = '{$a->name} will NOT receive copies of \'{$a->forum}\' by email.';
$string['nownottracking'] = '{$a->name} is no longer tracking \'{$a->forum}\'.';
$string['nowsubscribed'] = '{$a->name} will receive copies of \'{$a->forum}\' by email.';
$string['nowtracking'] = '{$a->name} is now tracking \'{$a->forum}\'.';
$string['numposts'] = '{$a} posts';
$string['olderdiscussions'] = 'Older discussions';
$string['oldertopics'] = 'Older topics';
$string['oldpostdays'] = 'Read after days';
$string['openmode0'] = 'No discussions, no replies';
$string['openmode1'] = 'No discussions, but replies are allowed';
$string['openmode2'] = 'Discussions and replies are allowed';
$string['overviewnumpostssince'] = 'posts since last login';
$string['overviewnumunread'] = 'total unread';
$string['parent'] = 'Show parent';
$string['parentofthispost'] = 'Parent of this post';
$string['postadded'] = '<p>Your post was successfully added.</p> <p>You have {$a} to edit it if you want to make any changes.</p>';
$string['postaddedsuccess'] = 'Your post was successfully added.';
$string['postaddedtimeleft'] = 'You have {$a} to edit it if you want to make any changes.';
$string['postincontext'] = 'See this post in context';
$string['postmailinfo'] = 'This is a copy of a message posted on the {$a} website.

To add your reply via the website, click on this link:';
$string['postmailnow'] = '<p>This post will be mailed out immediately to all forum subscribers.</p>';
$string['postrating1'] = 'Mostly Separate Knowing';
$string['postrating2'] = 'Separate and Connected';
$string['postrating3'] = 'Mostly Connected Knowing';
$string['posts'] = 'Posts';
$string['posttoforum'] = 'Post to forum';
$string['postupdated'] = 'Your post was updated';
$string['potentialsubscribers'] = 'Potential subscribers';
$string['processingdigest'] = 'Processing email digest for user {$a}';
$string['processingpost'] = 'Processing post {$a}';
$string['prune'] = 'Split';
$string['prunedpost'] = 'A new discussion has been created from that post';
$string['pruneheading'] = 'Split the discussion and move this post to a new discussion';
$string['qandaforum'] = 'Q and A forum';
$string['qandanotify'] = 'This is a Question and Answer forum. In order to see other responses to these Questions, you must first post your Answer';
$string['rate'] = 'Rate';
$string['rating'] = 'Rating';
$string['ratingeveryone'] = 'Everyone can rate posts';
$string['ratingno'] = 'No ratings';
$string['ratingonlyteachers'] = 'Only {$a} can rate posts';
$string['ratingpublic'] = '{$a} can see everyone\'s ratings';
$string['ratingpublicnot'] = '{$a} can only see their own ratings';
$string['ratings'] = 'Ratings';
$string['ratingssaved'] = 'Ratings saved';
$string['ratingsuse'] = 'Use ratings';
$string['ratingtime'] = 'Restrict ratings to posts with dates in this range:';
$string['re'] = 'Re:';
$string['readtherest'] = 'Read the rest of this topic';
$string['replies'] = 'Replies';
$string['repliesmany'] = '{$a} replies so far';
$string['repliesone'] = '{$a} reply so far';
$string['reply'] = 'Reply';
$string['replyforum'] = 'Reply to forum';
$string['replytouser'] = 'Use email address in reply';
$string['resetforums'] = 'Delete posts from';
$string['resetforumsall'] = 'Delete all posts';
$string['resetsubscriptions'] = 'Delete all forum subscriptions';
$string['resettrackprefs'] = 'Delete all forum tracking preferences';
$string['rsssubscriberssdiscussions'] = 'Display the RSS feed for \'{$a}\' discussions';
$string['rsssubscriberssposts'] = 'Display the RSS feed for \'{$a}\' posts';
$string['rssarticles'] = 'Number of RSS recent articles';
$string['rssarticles_help'] = 'This setting specifies the number of articles (either discussions or posts) to include in the RSS feed. Between 5 and 20 generally acceptable.';
$string['rsstype'] = 'RSS feed for this activity';
$string['rsstype_help'] = 'To enable the RSS feed for this activity, select either discussions or posts to be included in the feed.';
$string['search'] = 'Search';
$string['searchdatefrom'] = 'Posts must be newer than this';
$string['searchdateto'] = 'Posts must be older than this';
$string['searchforumintro'] = 'Please enter search terms into one or more of the following fields:';
$string['searchforums'] = 'Search forums';
$string['searchfullwords'] = 'These words should appear as whole words';
$string['searchnotwords'] = 'These words should NOT be included';
$string['searcholderposts'] = 'Search older posts...';
$string['searchphrase'] = 'This exact phrase must appear in the post';
$string['searchresults'] = 'Search results';
$string['searchsubject'] = 'These words should be in the subject';
$string['searchuser'] = 'This name should match the author';
$string['searchuserid'] = 'The Moodle ID of the author';
$string['searchwhichforums'] = 'Choose which forums to search';
$string['searchwords'] = 'These words can appear anywhere in the post';
$string['seeallposts'] = 'See all posts made by this user';
$string['sendinratings'] = 'Send in my latest ratings';
$string['shortpost'] = 'Short post';
$string['showsubscribers'] = 'Show/edit current subscribers';
$string['singleforum'] = 'A single simple discussion';
$string['startedby'] = 'Started by';
$string['subject'] = 'Subject';
$string['subscribe'] = 'Subscribe to this forum';
$string['subscribeall'] = 'Subscribe everyone to this forum';
$string['subscribed'] = 'Subscribed';
$string['subscribenone'] = 'Unsubscribe everyone from this forum';
$string['subscribers'] = 'Subscribers';
$string['subscribersto'] = 'Subscribers to \'{$a}\'';
$string['subscribestart'] = 'Send me email copies of posts to this forum';
$string['subscribestop'] = 'I don\'t want email copies of posts to this forum';
$string['subscription'] = 'Subscription';
$string['subscription_help'] = 'If you are subscribed to a forum it means you will receive email copies of forum posts. Usually you can choose whether you wish to be subscribed, though sometimes subscription is forced so that everyone receives email copies of forum posts.';
$string['subscriptionmode'] = 'Subscription mode';
$string['subscriptionmode_help'] = 'When a participant is subscribed to a forum it means they will receive email copies of forum posts.

There are 4 subscription mode options:

* Optional subscription - Participants can choose whether to be subscribed
* Forced subscription - Everyone is subscribed and cannot unsubscribe
* Auto subscription - Everyone is subscribed initially but can choose to unsubscribe at any time
* Subscription disabled - Subscriptions are not allowed';
$string['subscriptionoptional'] = 'Optional subscription';
$string['subscriptionforced'] = 'Forced subscription';
$string['subscriptionauto'] = 'Auto subscription';
$string['subscriptiondisabled'] = 'Subscription disabled';
$string['subscriptions'] = 'Subscriptions';
$string['thisforumisthrottled'] = 'This forum has a limit to the number of forum postings you can make in a given time period - this is currently set at {$a->blockafter} posting(s) in {$a->blockperiod}';
$string['timedposts'] = 'Timed posts';
$string['timestartenderror'] = 'Display end date cannot be earlier than the start date';
$string['trackforum'] = 'Track unread posts';
$string['tracking'] = 'Track';
$string['trackingoff'] = 'Off';
$string['trackingon'] = 'On';
$string['trackingoptional'] = 'Optional';
$string['trackingtype'] = 'Read tracking for this forum?';
$string['trackingtype_help'] = 'If enabled, participants can track read and unread messages in the forum and in discussions.

There are three options:

* Optional - Participants can choose whether to turn tracking on or off
* On - Tracking is always on
* Off - Tracking is always off';
$string['unread'] = 'Unread';
$string['unreadposts'] = 'Unread posts';
$string['unreadpostsnumber'] = '{$a} unread posts';
$string['unreadpostsone'] = '1 unread post';
$string['unsubscribe'] = 'Unsubscribe from this forum';
$string['unsubscribeall'] = 'Unsubscribe from all forums';
$string['unsubscribeallconfirm'] = 'You are subscribed to {$a} forums now. Do you really want to unsubscribe from all forums and disable forum auto-subscribe?';
$string['unsubscribealldone'] = 'All your forum subscriptions were removed, you might still receive notifications from forums with forced subscription. If you do not want to receive any emails from this server please go to your profile and disable email address there.';
$string['unsubscribeallempty'] = 'Sorry, you are not subscribed to any forums. If you do not want to receive any emails from this server please go to your profile and disable email address there.';
$string['unsubscribed'] = 'Unsubscribed';
$string['unsubscribeshort'] = 'Unsubscribe';
$string['usermarksread'] = 'Manual message read marking';
$string['viewalldiscussions'] = 'View all discussions';
$string['warnafter'] = 'Post threshold for warning';
$string['warnafter_help'] = 'Students can be warned as they approach the maximum number of posts allowed in a given period. This setting specifies after how many posts they are warned.';
$string['youratedthis'] = 'You rated this';
$string['yournewquestion'] = 'Your new question';
$string['yournewtopic'] = 'Your new discussion topic';
$string['yourreply'] = 'Your reply';