<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTION'				=> 'Ενέργεια ',
	'ACTION_NOTE'			=> 'Ενέργεια/Σημείωση ',
	'ADD_FEEDBACK'			=> 'Προσθήκη ανατροφοδότησης ',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Εάν θα επιθυμούσατε να προσθέσετε μια αναφορά σχετικά με αυτό παρακαλώ συμπληρώστε την ακόλουθη φόρμα. Χρησιμοποιήστε μόνο απλό κείμενο. HTML, BBCode, κλπ. δεν επιτρέπεται.',
	'ADD_WARNING'			=> 'Προσθήκη προειδοποίησης',
	'ADD_WARNING_EXPLAIN'	=> 'Για να στείλετε μια προειδοποίηση σε αυτό το μέλος παρακαλώ συμπληρώστε την ακόλουθη φόρμα. Χρησιμοποιήστε μόνο απλό κείμενο. HTML, BBCode, κλπ. δεν επιτρέπεται',
	'ALL_ENTRIES'			=> 'Όλες οι καταχωρίσεις',
	'ALL_NOTES_DELETED'		=> 'Όλες οι σημειώσεις μέλους διαγράφτηκαν με επιτυχία',
	'ALL_REPORTS'			=> 'Όλες οι αναφορές',
	'ALREADY_REPORTED'		=> 'Αυτή η δημοσίευση έχει ήδη αναφερθεί.',
	'ALREADY_REPORTED_PM'	=> 'Αυτό το προσωπικό μήνυμα έχει ήδη αναφερθεί.',	
	'ALREADY_WARNED'		=> 'Μια προειδοποίηση έχει ήδη εκδοθεί για αυτή δημοσίευση.',
	'APPROVE'				=> 'Έγκριση',
	'APPROVE_POST'			=> 'Έγκριση δημοσίευσης',
	'APPROVE_POST_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να εγκρίνετε αυτή τη δημοσίευση;',
	'APPROVE_POSTS'			=> 'Έγκριση δημοσιεύσεων,',
	'APPROVE_POSTS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να εγκρίνετε τις επιλεγμένες δημοσιεύσεις;',
	'APPROVE_TOPIC'			=> 'Έγκριση θέματος',
	'APPROVE_TOPIC_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να εγκρίνετε αυτό το θέμα;',
	'APPROVE_TOPICS'		=> 'Έγκριση θεμάτων',
	'APPROVE_TOPICS_CONFIRM'=> 'Είστε σίγουρος (-η) ότι θέλετε να εγκρίνετε τα επιλεγμένα θέματα;',

	'CANNOT_MOVE_SAME_FORUM'=> 'Δεν μπορείτε να μετακινήσετε ένα θέμα στη Δ. Συζήτηση στην οποία βρίσκεται ήδη.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Δεν μπορείτε να προειδοποιήσετε μη εγγεγραμμένα μέλη και επισκέπτες.',
	'CANNOT_WARN_SELF'		=> 'Δεν μπορείτε να προειδοποιήσετε τον εαυτό σας.',
	'CAN_LEAVE_BLANK'		=> 'Αυτό μπορεί να αφεθεί κενό.',
	'CHANGE_POSTER'			=> 'Αλλαγή συγγραφέα',
	'CLOSE_PM_REPORT'		=> 'Κλείσιμο αναφοράς ΠΜ',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να κλείσετε την επιλεγμένη αναφορά ΠΜ;',
	'CLOSE_PM_REPORTS'		=> 'Κλείσιμο αναφορών ΠΜ',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να κλείσετε τις επιλεγμένες αναφορές ΠΜ;',
	'CLOSE_REPORT'			=> 'Κλείσιμο αναφοράς',
	'CLOSE_REPORT_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να κλείσετε την αναφορά για την επιλεγμένη δημοσίευση;',
	'CLOSE_REPORTS'			=> 'Κλείσιμο αναφορών',
	'CLOSE_REPORTS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να κλείσετε τις αναφορές για τις επιλεγμένες δημοσιεύσεις;',

	'DELETE_PM_REPORT'			=> 'Διαγραφή αναφοράς ΠΜ',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να διαγράψετε την επιλεγμένη αναφορά ΠΜ;',
	'DELETE_PM_REPORTS'			=> 'Διαγραφή αναφορών ΠΜ',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να διαγράψετε τις επιλεγμένες αναφορές ΠΜ;',
	'DELETE_POSTS'				=> 'Διαγραφή δημοσιεύσεων',
	'DELETE_REPORT'				=> 'Διαγραφή αναφοράς',
	'DELETE_REPORT_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να διαγράψετε την επιλεγμένη αναφορά;',
	'DELETE_REPORTS'			=> 'Διαγραφή αναφορών',
	'DELETE_REPORTS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να διαγράψετε τις επιλεγμένες αναφορές;',
	'DELETE_SHADOW_TOPIC'		=> 'Διαγραφή συνδέσμου προς το μετακινούμενο θέμα',
	'DELETE_TOPICS'				=> 'Διαγραφή επιλεγμένων θεμάτων',
	'DISAPPROVE'				=> 'Απόρριψη',
	'DISAPPROVE_REASON'			=> 'Λόγος απόρριψης',
	'DISAPPROVE_POST'			=> 'Απόρριψη δημοσίευσης',
	'DISAPPROVE_POST_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να απορρίψετε αυτή τη δημοσίευση;',
	'DISAPPROVE_POSTS'			=> 'Απόρριψη δημοσιεύσεων',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να απορρίψετε αυτές τις δημοσιεύσεις;',
	'DISPLAY_LOG'				=> 'Εμφάνιση καταχωρήσεων που έγιναν πριν από',
	'DISPLAY_OPTIONS'			=> 'Εμφάνιση επιλογών',

	'EMPTY_REPORT'					=> 'Πρέπει να προσθέσετε μια περιγραφή για αυτό τον λόγο.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Παρακαλώ σημειώστε ότι ένα ή περισσότερα θέματα έχουν αφαιρεθεί από τη βάση δεδομένων σας, επειδή ήταν ή είναι κενά.',

	'FEEDBACK'				=> 'Ανατροφοδότηση',
	'FORK'					=> 'Αντιγραφή',
	'FORK_TOPIC'			=> 'Αντιγραφή δημοσίευσης',
	'FORK_TOPIC_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να αντιγράψετε αυτή τη δημοσίευση;',
	'FORK_TOPICS'			=> 'Αντιγραφή επιλεγμένων θεμάτων',
	'FORK_TOPICS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να αντιγράψετε τα επιλεγμένα θέματα;',
	'FORUM_DESC'			=> 'Περιγραφή',
	'FORUM_NAME'			=> 'Όνομα Δ. Συζήτησης',
	'FORUM_NOT_EXIST'		=> 'Η Δ. Συζήτηση που επιλέξατε δεν υπάρχει',
	'FORUM_NOT_POSTABLE'	=> 'Στη Δ. Συζήτηση που επιλέξατε δεν μπορεί να δημοσιευθεί.',
	'FORUM_STATUS'			=> 'Κατάσταση Δ. Συζήτησης',
	'FORUM_STYLE'			=> 'Στυλ Δ. Συζήτησης',

	'GLOBAL_ANNOUNCEMENT'	=> 'Γενική ανακοίνωση',

	'IP_INFO'				=> 'Πληροφορίες διεύθυνσης IP',
	'IPS_POSTED_FROM'		=> 'Η διεύθυνση IP από την οποία το μέλος έχει κάνει δημοσιεύσεις',

	'LATEST_LOGS'				=> 'Τελευταίες 5 ενέργειες ιστορικού',
	'LATEST_REPORTED'			=> 'Τελευταίες 5 αναφορές',
	'LATEST_REPORTED_PMS'		=> 'Τελευταίες 5 αναφορές ΠΜ',
	'LATEST_UNAPPROVED'			=> 'Τελευταίες 5 δημοσιεύσεις σε αναμονή έγκρισης',
	'LATEST_WARNING_TIME'		=> 'Τελευταία προειδοποίηση που εκδόθηκε',
	'LATEST_WARNINGS'			=> 'Τελευταίες 5 προειδοποιήσεις',
	'LEAVE_SHADOW'				=> 'Αφήστε ένα θέμα (σύνδεσμο) στη θέση',
	'LIST_REPORTS'				=> array(
		1	=> '%d αναφορά',
		2	=> '%d αναφορές',
	),
	'LOCK'						=> 'Κλείδωμα',
	'LOCK_POST_POST'			=> 'Κλείδωμα δημοσίευσης',
	'LOCK_POST_POST_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να αποτρέψετε την επεξεργασία αυτής της δημοσίευσης;',
	'LOCK_POST_POSTS'			=> 'Κλείδωμα επιλεγμένων δημοσιεύσεων',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να αποτρέψετε την επεξεργασία των επιλεγμένων δημοσιεύσεων;',
	'LOCK_TOPIC_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να κλειδώσετε αυτό το θέμα;',
	'LOCK_TOPICS'				=> 'Κλείδωμα επιλεγμένων θεμάτων',
	'LOCK_TOPICS_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να κλειδώσετε όλα τα επιλεγμένα θέματα;',
	'LOGS_CURRENT_TOPIC'		=> 'Τρέχουσα προβολή ιστορικού από:',
	'LOGIN_EXPLAIN_MCP'			=> 'Για να συντονίσετε αυτή τη Δ. Συζήτηση πρέπει να συνδεθείτε.',
	'LOGVIEW_VIEWPOST'			=> 'Προβολή δημοσίευσης',
	'LOGVIEW_VIEWTOPIC'			=> 'Προβολή θέματος',
	'LOGVIEW_VIEWLOGS'			=> 'Προβολή ιστορικού θέματος',
	'LOGVIEW_VIEWFORUM'			=> 'Προβολή Δ. Συζήτησης',
	'LOOKUP_ALL'				=> 'Αναζήτηση όλων των διευθύνσεων IP',
	'LOOKUP_IP'					=> 'Αναζήτηση της διεύθυνσης IP',

	'MARKED_NOTES_DELETED'		=> 'Οι επιλεγμένες σημειώσεις του μέλους αφαιρέθηκαν με επιτυχία.',

	'MCP_ADD'					=> 'Προσθήκη προειδοποίησης',

	'MCP_BAN'					=> 'Αποκλεισμός',
	'MCP_BAN_EMAILS'			=> 'Αποκλεισμός ηλεκτρονικών ταχυδρομείων',
	'MCP_BAN_IPS'				=> 'Αποκλεισμός διευθύνσεων IP',
	'MCP_BAN_USERNAMES'			=> 'Αποκλεισμός ονομάτων μελών',

	'MCP_LOGS'						=> 'Ιστορικό συντονιστών',
	'MCP_LOGS_FRONT'				=> 'Κεντρική σελίδα',
	'MCP_LOGS_FORUM_VIEW'			=> 'Ιστορικό Δ. Συζήτησης',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Ιστορικό θέματος',

	'MCP_MAIN'						=> 'Κεντρική',
	'MCP_MAIN_FORUM_VIEW'			=> 'Προβολή Δ. Συζήτησης',
	'MCP_MAIN_FRONT'				=> 'Κεντρική σελίδα',
	'MCP_MAIN_POST_DETAILS'			=> 'Λεπτομέρειες δημοσίευσης',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Προβολή θέματος',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Μετατροπή σε “Ανακοίνωση”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να μετατρέψετε αυτό το θέμα σε “Ανακοίνωση”;',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Μετατροπή σε “Ανακοινώσεις”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Είστε σίγουρος (-η) ότι θέλετε να μετατρέψετε τα επιλεγμένα θέματα σε “Ανακοινώσεις”;',
	'MCP_MAKE_GLOBAL'				=> 'Μετατροπή σε “Γενική ανακοίνωση”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να μετατρέψετε αυτό το θέμα σε “Γενική ανακοίνωση”;',
	'MCP_MAKE_GLOBALS'				=> 'Μετατροπή σε “Γενικές ανακοινώσεις”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να μετατρέψετε τα επιλεγμένα θέματα σε “Γενικές ανακοινώσεις”;',
	'MCP_MAKE_STICKY'				=> 'Μετατροπή σε “Σημείωση”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να μετατρέψετε αυτό το θέμα σε “Σημείωση”;',
	'MCP_MAKE_STICKIES'				=> 'Μετατροπή σε “Σημειώσεις”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να μετατρέψετε τα επιλεγμένα θέματα σε “Σημειώσεις”;',
	'MCP_MAKE_NORMAL'				=> 'Μετατροπή σε “Τυπικό Θέμα”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να μετατρέψετε αυτό το θέμα σε “Κανονικό θέμα”;',
	'MCP_MAKE_NORMALS'				=> 'Μετατροπή σε “Κανονικά Θέματα”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να μετατρέψετε τα επιλεγμένα θέματα σε “Κανονικά Θέματα”;',

	'MCP_NOTES'						=> 'Σημειώσεις μέλους',
	'MCP_NOTES_FRONT'				=> 'Κεντρική σελίδα',
	'MCP_NOTES_USER'				=> 'Λεπτομέρειες μέλους',

	'MCP_POST_REPORTS'				=> 'Αναφορές που εκδόθηκαν για αυτή τη δημοσίευση',

	'MCP_PM_REPORTS'				=> 'Αναφερόμενα ΠΜ',
	'MCP_PM_REPORT_DETAILS'			=> 'Λεπτομέρειες αναφοράς ΠΜ',
	'MCP_PM_REPORTS_CLOSED'			=> 'Κλειστές αναφορές ΠΜ',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Αυτή είναι μια λίστα με όλες τις αναφορές σχετικά με προσωπικά μηνύματα οι οποίες έχουν ήδη επιλυθεί.',
	'MCP_PM_REPORTS_OPEN'			=> 'Ανοιχτές αναφορές ΠΜ',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Αυτή είναι μια λίστα όλων των αναφερόμενων προσωπικών μηνυμάτων οι οποίες δεν έχουν ακόμη επιλυθεί.',

	'MCP_REPORTS'					=> 'Αναφορές μηνυμάτων',
	'MCP_REPORT_DETAILS'			=> 'Λεπτομέρειες αναφοράς',
	'MCP_REPORTS_CLOSED'			=> 'Κλειστές αναφορές',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Αυτή είναι μια λίστα με όλες τις αναφορές σχετικά με δημοσιεύσεις οι οποίες έχουν ήδη επιλυθεί.',
	'MCP_REPORTS_OPEN'				=> 'Ανοιχτές αναφορές',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Αυτή είναι μια λίστα όλων των αναφερόμενων δημοσιεύσεων οι οποίες δεν έχουν ακόμη επιλυθεί.',

	'MCP_QUEUE'								=> 'Λίστα αναμονής Συντονιστών',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Λεπτομέρειες έγκρισης',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Δημοσιεύσεις σε αναμονή έγκρισης',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Αυτή είναι μια λίστα όλων των δημοσιεύσεων που απαιτούν έγκριση πριν αυτές γίνουν ορατές στα μέλη.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Θέματα σε αναμονή έγκρισης',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Αυτή είναι μια λίστα όλων των θεμάτων που απαιτούν έγκριση πριν αυτά γίνουν ορατά στα μέλη.',
	'MCP_QUEUE_DELETED_POSTS'				=> 'Διαγραμμένες δημοσιεύσεις',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'Αυτή είναι μια λίστα με όλες τις σημειωμένες ως διαγραμμένες δημοσιεύσεις. Μπορείτε να επαναφέρετε ή να διαγράψετε οριστικά τις δημοσιεύσεις από αυτή την οθόνη.',
	'MCP_QUEUE_DELETED_TOPICS'				=> 'Διαγραμμένα θέματα',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'Αυτή είναι μια λίστα με όλα τα σημειωμένα ως διαγραμμένα θέματα. Μπορείτε να επαναφέρετε ή να διαγράψετε οριστικά τα θέματα από αυτήν την οθόνη.',

	'MCP_VIEW_USER'			=> 'Προβολή προειδοποιήσεων για ένα συγκεκριμένο μέλος',

	'MCP_WARN'				=> 'Προειδοποιήσεις',
	'MCP_WARN_FRONT'		=> 'Κεντρική σελίδα',
	'MCP_WARN_LIST'			=> 'Λίστα προειδοποιήσεων',
	'MCP_WARN_POST'			=> 'Προειδοποιήστε για συγκεκριμένη δημοσίευση',
	'MCP_WARN_USER'			=> 'Προειδοποιήστε μέλος',

	'MERGE_POSTS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να μετακινήσετε τις επιλεγμένες τις δημοσιεύσεις;',
	'MERGE_TOPIC_EXPLAIN'	=> 'Με την παρακάτω φόρμα μπορείτε να μετακινήσετε επιλεγμένες δημοσιεύσεις σε ένα άλλο θέμα. Οι δημοσιεύσεις θα διαχωριστούν από αυτό το θέμα και θα συγχωνευτούν στο άλλο. Αυτές οι δημοσιεύσεις δεν θα αναδιαταχθούν και θα εμφανίζονται σαν να τις δημοσίευσαν τα μέλη στο νέο θέμα.<br />Παρακαλώ εισάγετε την ταυτότητα θέματος (ID) προορισμού ή πατήστε στο “Επιλέξτε θέμα” για να αναζητήσετε ένα.',
	'MERGE_TOPIC_ID'		=> 'Αριθμός αναγνώρισης θέματος προορισμού (ID)',
	'MERGE_TOPICS'			=> 'Συγχώνευση θεμάτων',
	'MERGE_TOPICS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να συγχωνεύσετε τα επιλεγμένα θέματα;',
	'MODERATE_FORUM'		=> 'Συντονίστε Δ. Συζήτηση',
	'MODERATE_TOPIC'		=> 'Συντονίστε θέμα',
	'MODERATE_POST'			=> 'Συντονίστε δημοσίευση',
	'MOD_OPTIONS'			=> 'Επιλογές συντονισμού',
	'MORE_INFO'				=> 'Περισσότερες λεπτομέρειες',
	'MOST_WARNINGS'			=> 'Μέλη με τις περισσότερες προειδοποιήσεις',
	'MOVE_TOPIC_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να μετακινήσετε το θέμα σε μια νέα Δ. Συζήτηση;',
	'MOVE_TOPICS'			=> 'Μετακίνηση επιλεγμένων θεμάτων',
	'MOVE_TOPICS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να μετακινήσετε τα επιλεγμένα θέματα, σε μια νέα Δ. Συζήτηση;',

	'NOTIFY_POSTER_APPROVAL'		=> 'Ειδοποίηση συγγραφέα σχετικά με την έγκριση;',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Ειδοποίηση συγγραφέα σχετικά με την απόρριψη;',
	'NOTIFY_USER_WARN'				=> 'Ειδοποίηση μέλους σχετικά με την προειδοποίηση;',
	'NOT_MODERATOR'					=> 'Δεν είστε συντονιστής σε αυτή τη Δ. Συζήτηση.',
	'NO_DESTINATION_FORUM'			=> 'Παρακαλώ επιλέξτε μια Δ. Συζήτηση προορισμού.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Δεν υπάρχει καμία διαθέσιμη Δ. Συζήτηση προορισμού.',
	'NO_ENTRIES'					=> 'Δεν υπάρχουν καταχωρήσεις ιστορικού.',
	'NO_FEEDBACK'					=> 'Καμία ανατροφοδότηση δεν υπάρχει για αυτό το μέλος.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Πρέπει να επιλέξετε ένα θέμα προορισμού για συγχώνευση δημοσιεύσεων.',
	'NO_MATCHES_FOUND'				=> 'Κανένα κριτήριο δεν βρέθηκε.',
	'NO_POST'						=> 'Πρέπει να επιλέξετε μια δημοσίευση για να προειδοποιήσετε αυτό το μέλος για μια δημοσίευση.',
	'NO_POST_REPORT'				=> 'Αυτή η δημοσίευση δεν αναφέρθηκε.',
	'NO_POST_SELECTED'				=> 'Πρέπει να επιλέξετε τουλάχιστον μια δημοσίευση για να εκτελέσετε αυτή την ενέργεια.',
	'NO_POSTS_DELETED'				=> 'Δεν υπάρχουν διαγραμμένες δημοσιεύσεις.',
	'NO_POSTS_QUEUE'				=> 'Δεν υπάρχουν δημοσιεύσεις σε αναμονή για έγκριση.',
	'NO_REASON_DISAPPROVAL'			=> 'Παρακαλώ δώστε ένα κατάλληλο λόγο για την απόρριψη.',
	'NO_REPORT'						=> 'Δεν βρέθηκε αναφορά',
	'NO_REPORTS'					=> 'Δεν βρέθηκαν αναφορές',
	'NO_REPORT_SELECTED'			=> 'Πρέπει να επιλέξετε τουλάχιστον μια αναφορά για να εκτελέσετε αυτή την ενέργεια.',
	'NO_TOPIC_ICON'					=> 'Κανένα',
	'NO_TOPIC_SELECTED'				=> 'Πρέπει να επιλέξετε τουλάχιστον ένα θέμα για να ολοκληρώσετε αυτή την ενέργεια.',
	'NO_TOPICS_DELETED'				=> 'Δεν υπάρχουν διαγραμμένα θέματα.',
	'NO_TOPICS_QUEUE'				=> 'Δεν υπάρχουν θέματα σε αναμονή για έγκριση.',

	'ONLY_TOPIC'			=> 'Μόνο θέμα “%s”',
	'OTHER_USERS'			=> 'Άλλα μέλη τα οποία έχουν δημοσιεύσει από αυτή τη διεύθυνση IP',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "%s δεν επιτρέπεται ως γρήγορο εργαλείο",

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Η επιλεγμένη αναφορά ΠΜ έχει κλείσει με επιτυχία.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Η επιλεγμένη αναφορά ΠΜ έχει διαγραφεί με επιτυχία.',
	'PM_REPORTED_SUCCESS'		=> 'Αυτό το προσωπικό μήνυμα έχει αναφερθεί με επιτυχία.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Οι επιλεγμένες αναφορές ΠΜ έχουν κλείσει με επιτυχία.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'Οι επιλεγμένες αναφορές ΠΜ έχουν διαγραφεί με επιτυχία.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'Δεν υπάρχουν αναφορές ΠΜ για έλεγχο.',
		1	=> 'Συνολικά υπάρχει εδώ <strong>1</strong> αναφορά ΠΜ για έλεγχο.',
		2	=> 'Συνολικά υπάρχουν εδώ <strong>%d</strong> αναφορές ΠΜ για έλεγχο.',
	),
	'PM_REPORT_DETAILS'			=> 'Λεπτομέρειες αναφοράς προσωπικού μηνύματος',
	'POSTER'					=> 'Συγγραφέας',
	'POSTS_APPROVED_SUCCESS'	=> 'Η επιλεγμένες δημοσιεύσεις έχουν εγκριθεί.',
	'POSTS_DELETED_SUCCESS'		=> 'Οι επιλεγμένες δημοσιεύσεις έχουν διαγραφεί με επιτυχία από τη βάση δεδομένων.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Οι επιλεγμένες δημοσιεύσεις έχουν απορριφθεί',
	'POSTS_LOCKED_SUCCESS'		=> 'Οι επιλεγμένες δημοσιεύσεις έχουν κλειδωθεί με επιτυχία.',
	'POSTS_MERGED_SUCCESS'		=> 'Οι επιλεγμένες δημοσιεύσεις έχουν συγχωνευθεί.',
	'POSTS_PER_PAGE'			=> 'Δημοσιεύσεις ανά σελίδα',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Καθορίστε σε 0 για να προβάλετε όλες τις δημοσιεύσεις.)',
	'POSTS_RESTORED_SUCCESS'	=> 'Οι επιλεγμένες δημοσιεύσεις επαναφέρθηκαν με επιτυχία.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Οι επιλεγμένες δημοσιεύσεις ξεκλειδώθηκαν με επιτυχία.',
	'POST_APPROVED_SUCCESS'		=> 'Η επιλεγμένη δημοσίευση έχει εγκριθεί.',
	'POST_DELETED_SUCCESS'		=> 'Η επιλεγμένη δημοσίευση διαγράφτηκε με επιτυχία από τη βάση δεδομένων.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Η επιλεγμένη δημοσίευση έχει απορριφθεί.',
	'POST_LOCKED_SUCCESS'		=> 'Η δημοσίευση κλειδώθηκε με επιτυχία.',
	'POST_NOT_EXIST'			=> 'Η ζητούμενη δημοσίευση δεν υπάρχει.',
	'POST_REPORTED_SUCCESS'		=> 'Αυτή η δημοσίευση αναφέρθηκε με επιτυχία.',
	'POST_RESTORED_SUCCESS'		=> 'Αυτή η δημοσίευση επανήλθε με επιτυχία.',
	'POST_UNLOCKED_SUCCESS'		=> 'Η δημοσίευση ξεκλειδώθηκε με επιτυχία.',

	'READ_USERNOTES'			=> 'Σημειώσεις μέλους',
	'READ_WARNINGS'				=> 'Προειδοποιήσεις μέλους',
	'REPORTER'					=> 'Αναφερόμενος',
	'REPORTED'					=> 'Αναφέρθηκε',
	'REPORTED_BY'				=> 'Αναφέρθηκε από',
	'REPORTED_ON_DATE'			=> 'στις',
	'REPORTS_CLOSED_SUCCESS'	=> 'Οι επιλεγμένες αναφορές έχουν κλείσει με επιτυχία.',
	'REPORTS_DELETED_SUCCESS'	=> 'Οι επιλεγμένες αναφορές έχουν διαγραφεί με επιτυχία.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'Δεν υπάρχουν αναφορές για έλεγχο.',
		1	=> 'Συνολικά υπάρχει εδώ <strong>1</strong> αναφορά για έλεγχο.',
		2	=> 'Συνολικά υπάρχουν εδώ <strong>%d</strong> αναφορές για έλεγχο.',
	),
	'REPORT_CLOSED'				=> 'Αυτή η αναφορά έχει ήδη κλείσει.',
	'REPORT_CLOSED_SUCCESS'		=> 'Η επιλεγμένη αναφορά έχει κλείσει με επιτυχία.',
	'REPORT_DELETED_SUCCESS'	=> 'Η επιλεγμένη αναφορά έχει διαγραφεί με επιτυχία.',
	'REPORT_DETAILS'			=> 'Λεπτομέρειες αναφοράς',
	'REPORT_MESSAGE'			=> 'Αναφέρετε αυτό το μήνυμα',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Χρησιμοποιήστε αυτή τη φόρμα για να αναφέρετε το επιλεγμένο προσωπικό μήνυμα. Η υποβολή αναφοράς πρέπει γενικά να χρησιμοποιηθεί μόνο εάν το μήνυμα παραβαίνει τους κανόνες της Δ. Συζήτησης. <strong>Αναφέροντας ένα προσωπικό μήνυμα το περιεχόμενό του θα γίνει ορατό σε όλους τους συντονιστές.</strong>',
	'REPORT_NOTIFY'				=> 'Ειδοποίησέ με',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Σας ενημερώνει όταν η αναφορά σας εξεταστεί.',
	'REPORT_POST_EXPLAIN'		=> 'Χρησιμοποιήστε αυτή τη φόρμα για να αναφέρετε το επιλεγμένο μήνυμα στους συντονιστές και διαχειριστές του συστήματος συζητήσεων. Η υποβολή αναφοράς πρέπει γενικά να χρησιμοποιηθεί μόνο εάν το μήνυμα παραβαίνει τους κανόνες της Δ. Συζήτησης.',
	'REPORT_REASON'				=> 'Λόγος αναφοράς',
	'REPORT_TIME'				=> 'Χρόνος αναφοράς',
	'RESTORE'					=> 'Επαναφορά',
	'RESTORE_POST'				=> 'Επαναφορά δημοσίευσης',
	'RESTORE_POST_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να επαναφέρετε αυτή τη δημοσίευση;',
	'RESTORE_POSTS'				=> 'Επαναφορά δημοσιεύσεων',
	'RESTORE_POSTS_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να επαναφέρετε τις επιλεγμένες δημοσιεύσεις;',
	'RESTORE_TOPIC'				=> 'Επαναφορά θέματος',
	'RESTORE_TOPIC_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να επαναφέρετε αυτό το θέμα;',
	'RESTORE_TOPICS'			=> 'Επαναφορά θεμάτων',
	'RESTORE_TOPICS_CONFIRM'	=> 'Είστε σίγουρος (-η) ότι θέλετε να επαναφέρετε τα επιλεγμένα θέματα;',
	'RESYNC'					=> 'Συγχρονισμός ',
	'RETURN_MESSAGE'			=> '%sΕπιστροφή στο μήνυμα%s',
	'RETURN_NEW_FORUM'			=> '%sΜετάβαση στη νέα Δ. Συζήτηση%s',
	'RETURN_NEW_TOPIC'			=> '%sΜετάβαση στο νέο θέμα%s',
	'RETURN_PM'					=> '%sΕπιστροφή στα προσωπικά μηνύματα%s',
	'RETURN_POST'				=> '%sΕπιστροφή στη δημοσίευση%s',
	'RETURN_QUEUE'				=> '%sΕπιστροφή στο αίτημα%s',
	'RETURN_REPORTS'			=> '%sΕπιστροφή στις αναφορές%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sΕπιστροφή στο θέμα%s',

	'SEARCH_POSTS_BY_USER'				=> 'Αναζήτηση δημοσιεύσεων από',
	'SELECT_ACTION'						=> 'Επιλέξτε επιθυμητή ενέργεια ',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Παρακαλώ επιλέξτε τη Δ. Συζήτηση στην οποία θέλετε να εμφανίζεται αυτή η γενική ανακοίνωση.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Ένα ή περισσότερα από τα θέματα που επιλέξατε είναι γενικές ανακοινώσεις. Παρακαλώ επιλέξτε τη Δ. Συζήτηση στην οποία θέλετε να εμφανίζονται.',
	'SELECT_MERGE'						=> 'Επιλέξτε για συγχώνευση',
	'SELECT_TOPICS_FROM'				=> 'Επιλέξτε θέματα από',
	'SELECT_TOPIC'						=> 'Επιλέξτε θέμα',
	'SELECT_USER'						=> 'Επιλέξτε μέλος',
	'SORT_ACTION'						=> 'Ενέργεια ιστορικού',
	'SORT_DATE'							=> 'Ημερομηνία',
	'SORT_IP'							=> 'Διεύθυνση IP',
	'SORT_WARNINGS'						=> 'Προειδοποιήσεις',
	'SPLIT_AFTER'						=> 'Διαχωρισμός θέματος από την επιλεγμένη δημοσίευση και μετά',
	'SPLIT_FORUM'						=> 'Δ. Συζήτηση για νέο θέμα',
	'SPLIT_POSTS'						=> 'Διαχωρισμός επιλεγμένων δημοσιεύσεων',
	'SPLIT_SUBJECT'						=> 'Νέος τίτλος θέματος',
	'SPLIT_TOPIC_ALL'					=> 'Διαχωρισμός θέματος από επιλεγμένες δημοσιεύσεις',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Είστε σίγουρος (-η) ότι θέλετε να διαχωρίσετε αυτό το θέμα;',
	'SPLIT_TOPIC_BEYOND'				=> 'Διαχωρισμός θέματος σε επιλεγμένη δημοσίευση',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να διαχωρίσετε το επιλεγμένο θέμα σε αυτή τη δημοσίευση;',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Με την ακόλουθη φόρμα μπορείτε να διαχωρίσετε ένα θέμα σε δύο, είτε με το να επιλέξετε τις δημοσιεύσεις μεμονωμένα είτε διαχωρίζοντας σε μια επιλεγμένη δημοσίευση.',

	'THIS_PM_IP'				=> 'Η διεύθυνση IP για αυτό το προσωπικό μήνυμα',
	'THIS_POST_IP'				=> 'Η διεύθυνση IP για αυτή τη δημοσίευση',
	'TOPICS_APPROVED_SUCCESS'	=> 'Τα επιλεγμένα θέματα έχουν εγκριθεί.',
	'TOPICS_DELETED_SUCCESS'	=> 'Τα επιλεγμένα θέματα έχουν διαγραφεί με επιτυχία από τη βάση δεδομένων.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Τα επιλεγμένα θέματα έχουν απορριφθεί.',
	'TOPICS_FORKED_SUCCESS'		=> 'Τα επιλεγμένα θέματα έχουν αντιγραφεί με επιτυχία.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Τα επιλεγμένα θέματα έχουν κλειδωθεί.',
	'TOPICS_MOVED_SUCCESS'		=> 'Τα επιλεγμένα θέματα έχουν μετακινηθεί με επιτυχία.',
	'TOPICS_RESTORED_SUCCESS'	=> 'Τα επιλεγμένα θέματα έχουν επαναφερθεί με επιτυχία.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Τα επιλεγμένα θέματα έχουν συγχρονιστεί με επιτυχία.',
	'TOPICS_TYPE_CHANGED'		=> 'Ο τύπος των θεμάτων άλλαξε με επιτυχία.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Τα επιλεγμένα θέματα έχουν ξεκλειδωθεί.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Το επιλεγμένο θέμα έχει εγκριθεί.',
	'TOPIC_DELETED_SUCCESS'		=> 'Το επιλεγμένο θέμα έχει διαγραφεί με επιτυχία από τη βάση δεδομένων.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Το επιλεγμένο θέμα έχει απορριφθεί',
	'TOPIC_FORKED_SUCCESS'		=> 'Το επιλεγμένο θέμα έχει αντιγραφεί με επιτυχία.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Το επιλεγμένο θέμα έχει κλειδωθεί.',
	'TOPIC_MOVED_SUCCESS'		=> 'Το επιλεγμένο θέμα έχει μετακινηθεί με επιτυχία.',
	'TOPIC_NOT_EXIST'			=> 'Το θέμα που επιλέξατε δεν υπάρχει.',
	'TOPIC_RESTORED_SUCCESS'	=> 'Το επιλεγμένο θέμα έχει επαναφερθεί με επιτυχία.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Το επιλεγμένο θέμα έχει συγχρονιστεί με επιτυχία.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Το επιλεγμένο θέμα έχει διαχωριστεί με επιτυχία.',
	'TOPIC_TIME'				=> 'Χρόνος δημοσίευσης',
	'TOPIC_TYPE_CHANGED'		=> 'Ο τύπος του θέματος άλλαξε με επιτυχία.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Το επιλεγμένο θέμα έχει ξεκλειδωθεί.',
	'TOTAL_WARNINGS'			=> 'Σύνολο προειδοποιήσεων',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'Δεν υπάρχει καμία δημοσίευση σε αναμονή για έγκριση.',
		1	=> 'Συνολικά υπάρχει <strong>1</strong> δημοσίευση σε αναμονή για έγκριση.',
		2	=> 'Συνολικά υπάρχουν <strong>%d</strong> δημοσιεύσεις σε αναμονή για έγκριση.',
	),
	'UNLOCK'						=> 'Ξεκλείδωμα',
	'UNLOCK_POST'					=> 'Ξεκλείδωμα δημοσίευσης',
	'UNLOCK_POST_EXPLAIN'			=> 'Επιτρέψτε επεξεργασία',
	'UNLOCK_POST_POST'				=> 'Ξεκλείδωμα δημοσίευσης',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να επιτρέψετε την επεξεργασία της δημοσίευσης;',
	'UNLOCK_POST_POSTS'				=> 'Ξεκλείδωμα επιλεγμένων δημοσιεύσεων',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Είστε σίγουρος (-η) ότι θέλετε να επιτρέψετε την επεξεργασία των επιλεγμένων δημοσιεύσεων;',
	'UNLOCK_TOPIC'					=> 'Ξεκλείδωμα θέματος',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Είστε σίγουρος (-η) ότι θέλετε να ξεκλειδώσετε αυτό το θέμα;',
	'UNLOCK_TOPICS'					=> 'Ξεκλείδωμα επιλεγμένων θεμάτων',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Είστε σίγουρος (-η) ότι θέλετε να ξεκλειδώσετε όλα τα επιλεγμένα θέματα;',
	'USER_CANNOT_POST'				=> 'Δεν μπορείτε να δημοσιεύσετε σε αυτή τη Δ. Συζήτηση.',
	'USER_CANNOT_REPORT'			=> 'Δεν μπορείτε να αναφέρετε δημοσιεύσεις από αυτή τη Δ. Συζήτηση.',
	'USER_FEEDBACK_ADDED'			=> 'Η ανατροφοδότηση μέλους προστέθηκε με επιτυχία.',
	'USER_WARNING_ADDED'			=> 'Το μέλος προειδοποιήθηκε με επιτυχία.',

	'VIEW_DETAILS'			=> 'Προβολή λεπτομερειών',
	'VIEW_PM'				=> 'Προβολή προσωπικού μηνύματος',	
	'VIEW_POST'				=> 'Προβολή δημοσίευσης',

	'WARNED_USERS'			=> 'Προειδοποιημένα μέλη',
	'WARNED_USERS_EXPLAIN'	=> 'Αυτή είναι μια λίστα των μελών στα οποία εκδόθηκαν αορίστου χρόνου προειδοποιήσεις.',
	'WARNING_PM_BODY'		=> 'Το παρακάτω είναι μια προειδοποίηση, η οποία έχει εκδοθεί σε εσάς από κάποιον συντονιστή ή διαχειριστή αυτής της ιστοσελίδας.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Έκδοση προειδοποίησης του συστήματος συζητήσεων',
	'WARNING_POST_DEFAULT'	=> 'Αυτή είναι μια προειδοποίηση που αφορά την παρακάτω δημοσίευσή που έγινε από εσάς: %s.',
	'NO_WARNINGS'			=> 'Δεν υπάρχουν προειδοποιήσεις.',

	'YOU_SELECTED_TOPIC'	=> 'Έχετε επιλέξει το θέμα με αριθμό ταυτότητας (ID) %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Παράνομο υλικό / Warez',
			'SPAM'		=> 'Μαζικό ενοχλητικό μήνυμα',
			'OFF_TOPIC'	=> 'Εκτός θέματος',
			'OTHER'		=> 'Διάφορα',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Το αναφερόμενο μήνυμα περιέχει συνδέσμους με παράνομο ή πειρατικό λογισμικό.',
			'SPAM'		=> 'Το αναφερόμενο μήνυμα έχει μόνο σκοπό να διαφημίσει άλλη ιστοσελίδα ή ένα άλλο προϊόν.',
			'OFF_TOPIC'	=> 'Το αναφερόμενο μήνυμα είναι εκτός θέματος.',
			'OTHER'		=> 'Το αναφερόμενο μήνυμα δεν ταιριάζει σε καμία κατηγορία (παρακαλούμε δώστε μια περιγραφή παρακάτω).',
		)
	),
));
