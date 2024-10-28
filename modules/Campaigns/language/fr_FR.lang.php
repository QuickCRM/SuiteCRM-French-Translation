<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_FROM_ADDR' => 'Adresse de l\'expéditeur :',
    'LBL_REPLY_ADDR' => 'Adresse de réponse',
    'LBL_REPLY_NAME' => 'Label de "Réponse à" :',

    'LBL_MODULE_NAME' => 'Campagnes',
    'LBL_MODULE_TITLE' => 'Campagnes',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher une campagne',
    'LBL_LIST_FORM_TITLE' => 'Liste des campagnes',
    'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Liste des newsletters',
    'LBL_CAMPAIGN_NAME' => 'Nom :',
    'LBL_CAMPAIGN' => 'Campagne :',
    'LBL_NAME' => 'Nom :',
    'LBL_INVITEE' => 'Contacts',
    'LBL_LIST_CAMPAIGN_NAME' => 'Campagne',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LIST_TYPE' => 'Type',
    'LBL_LIST_START_DATE' => 'Date de début',
    'LBL_LIST_END_DATE' => 'Date de fin',
    'LBL_DATE_ENTERED' => 'Date de création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié par :',
    'LBL_CREATED' => 'Créé par :',
    'LBL_TEAM' => 'Equipe :',
    'LBL_ASSIGNED_TO' => 'Assigné à :',
    'LBL_ASSIGNED_TO_ID' => 'Assigné à :',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
    'LBL_CAMPAIGN_START_DATE' => 'Date de début :',
    'LBL_CAMPAIGN_END_DATE' => 'Date de fin :',
    'LBL_CAMPAIGN_STATUS' => 'Statut :',
    'LBL_CAMPAIGN_BUDGET' => 'Budget :',
    'LBL_CAMPAIGN_EXPECTED_COST' => 'Coût estimé :',
    'LBL_CAMPAIGN_ACTUAL_COST' => 'Coût Actuel :',
    'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Revenu attendu :',
    'LBL_CAMPAIGN_IMPRESSIONS' => 'Affichages :',
    'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Coût par affichage :',
    'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Coût par clic :',
    'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Nombre d&#39;affaires gagnées :',
    'LBL_CAMPAIGN_TYPE' => 'Type :',
    'LBL_CAMPAIGN_OBJECTIVE' => 'Objectif :',
    'LBL_CAMPAIGN_CONTENT' => 'Description :',
    'LBL_CAMPAIGN_INACTIVE_SCHEDULE' => "La campagne &#39;{0}&#39; est en statut &#39;Désactivée&#39;. Vous devez modifier le statut en &#39;Activée&#39;.",
    'LNK_NEW_CAMPAIGN' => 'Créer une campagne (Classique)',
    'LNL_NEW_CAMPAIGN_WIZARD' => 'Nouvelle Campagne',
    'LNK_CAMPAIGN_LIST' => 'Campagnes',
    'LNK_IMPORT_CAMPAIGNS' => 'Importer des campagnes',
    'LNK_NEW_PROSPECT' => 'Créer la cible',
    'LNK_PROSPECT_LIST' => 'Voir Cibles',
    'LNK_NEW_PROSPECT_LIST' => 'Nouvelle Liste de Cibles',
    'LNK_PROSPECT_LIST_LIST' => 'Voir listes de cibles',
    'LBL_MODIFIED_BY' => 'Modifié par :',
    'LBL_CREATED_BY' => 'Créé par :',
    'LBL_TRACKER_TITLE' => 'Détails du Traqueur',
    'LBL_TRACKER_KEY' => 'Tracker :',
    'LBL_TRACKER_URL' => 'URL Tracker :',
    'LBL_TRACKER_TEXT' => 'Texte du lien Tracker :',
    'LBL_TRACKER_COUNT' => 'Nombre de clics :',
    'LBL_REFER_URL' => 'URL de redirection Tracker :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_NEW_FORM_TITLE' => 'Nouvelle Campagne',
    'LBL_TRACKED_URLS' => 'Trackers',
    'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'Trackers',
    'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Liste des cibles',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'E-mail marketing',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Nouveau Modèle d\'E-mail',
    'LNK_EMAIL_TEMPLATE_LIST' => 'Voir les modèles d\'E-mail',
    'LBL_TRACK_BUTTON_TITLE' => 'Résultats',
    'LBL_TRACK_BUTTON_LABEL' => 'Résultats',
    'LBL_QUEUE_BUTTON_TITLE' => 'Envoyer E-mails',
    'LBL_QUEUE_BUTTON_LABEL' => 'Envoyer E-mails',
    'LBL_TEST_BUTTON_TITLE' => 'Envoyer les E-mails de Tests',
    'LBL_TEST_BUTTON_LABEL' => 'Tester',
    'LBL_COPY_AND_PASTE_CODE' => 'Ou copiez et collez le code HTML ci-dessous dans une page existante',
    'LBL_CHARSET_NOTICE' => 'NOTICE : Veuillez vous assurer que la page contenant le formulaire de web-to-lead contient les lignes suivantes dans la section <head> :',

    'LBL_TODETAIL_BUTTON_TITLE' => 'Retour à la Campagne',
    'LBL_TODETAIL_BUTTON_LABEL' => 'Retour à la Campagne',

    'LBL_DEFAULT' => 'Toutes les listes de cibles',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Messages dans la file d&#39;attente',

    'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Messages envoyés / tentés',
    'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Rebonds, Autres',
    'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Rebonds, E-mails invalides',
    'LBL_LOG_ENTRIES_LINK_TITLE' => 'Liens cliqués',
    'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Messages lus',
    'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Désinscription',
    'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Leads créés',
    'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Leads',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Affaire(s) liée(s) à la campagne',
    'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Contacts créés',

    //error messages.
    'ERR_SENDING_NOW' => 'Des Messages sont envoyés, veuillez essayer plus tard.',

    'LBL_TRACK_ROI_BUTTON_LABEL' => 'Voir le ROI',
    'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Effacer des enregistrements Test',
    'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Effacer des enregistrements Test',
    'LBL_TRACK_DELETE_CONFIRM' => 'Cette option va effacer les logs des tests. Voulez-vous continuer?',
    'ERR_NO_MAILBOX' => "Les E-mails Marketings ci-dessous ne sont associés à aucune boîte E-mail.<br />Veuillez corriger ce problème avant de continuer.",
    'LBL_LIST_TO_ACTIVITY' => 'Affichage des Vues des Activités',
    'LBL_CURRENCY' => 'Devise :',
    'LBL_TARGETED' => 'Ciblé',
    'LBL_TOTAL_TARGETED' => 'Total ciblé',
    'LBL_CAMPAIGN_FREQUENCY' => 'Périodicité',
    'LBL_NEWSLETTERS' => 'Newsletters',
    'LBL_NEWSLETTER' => 'Newsletter',
    'LBL_SURVEY' => 'Sondage',
    'LBL_NEWSLETTER_FORENTRY' => 'Newsletter',
    'LBL_CREATE_NEWSLETTER' => 'Nouvelle Newsletter',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_INBOUND_EMAIL_SETTINGS' => 'Paramètres de courrier entrant',
    'LBL_INBOUND_EMAIL_SETTINGS_TITLE' => 'Paramètres de courrier entrant (info)',
    'LBL_INBOUND_EMAIL_CREATE' => 'Créer des E-mail entrants',
    'LBL_INBOUND_EMAIL_CREATE_TITLE' => 'Créer des E-mail entrants (info)',
    'LBL_STATUS_TEXT' => 'Statut :',
    'LBL_FROM_MAILBOX_NAME' => 'Compte de gestion des rebonds :',
    'LBL_FROM_MAILBOX_TITLE' => 'Compte e-mail de gestion des rebonds :',
    'LBL_OUTBOUND_MAILBOX_NAME' => 'Compte E-mail sortant :',
    'LBL_FROM_NAME' => 'Nom de l&#39;expéditeur :',
    'LBL_START_DATE_TIME' => 'Horaire Date et heure :',
    'LBL_DATE_START' => 'Date de début',
    'LBL_TIME_START' => 'Heure de début',
    'LBL_TEMPLATE' => 'Modèle d\'E-mail :',
    'LBL_TEMPLATE_FIELD' => 'Modèle d\'E-mail :',
    'LBL_SUBJECT' => 'Sujet :',
    'LBL_WIDTH' => 'Largeur par défaut :',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Créer',
    'LBL_MESSAGE_FOR' => 'Destinataires :',
    'LBL_FINISH' => 'Terminer',
    'LBL_ALL_PROSPECT_LISTS' => 'Toutes les listes cibles dans la Campagne.',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Modifier',
    'LBL_EMAIL_SETUP_WIZARD' => 'Paramétrages',
    'LBL_DIAGNOSTIC_WIZARD' => 'Diagnostics',
    'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Abonné(e) à',
    'LBL_UNSUBSCRIBED_HEADER' => 'Non abonné(e) à',
    'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Déplacer la NewsLetter dans la liste des NewsLetters disponible(s) pour la désinscription, désinscrira le contact pour cette NewsLetter. Mais cela ne supprimera pas le contact de la liste originale des destinataires ou de la liste originale des cibles.',
    'LBL_FILTER_CHART_BY' => 'Filtre graphique par :',
    'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Newsletters',
    'LBL_MARK_AS_SENT' => 'Marquer comme envoyé',
    'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Les entrées ont été traitées',
    //newsletter wizard
    'LBL_EDIT_TRACKER_NAME' => 'Nom du Tracker',
    'LBL_EDIT_TRACKER_URL' => 'URL du Tracker',
    'LBL_EDIT_OPT_OUT_' => 'Lien de suppression ?',
    'LBL_EDIT_OPT_OUT' => 'Lien de suppression',
    'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Liste des désabonnés :',
    'LBL_SUBSCRIPTION_LIST_NAME' => 'Liste des abonnés :',
    'LBL_TEST_LIST_NAME' => 'Liste de test :',
    'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'Désabonnés',
    'LBL_SUBSCRIPTION_TYPE_NAME' => 'Abonnés',
    'LBL_TEST_TYPE_NAME' => 'Test',
    'LBL_UNSUBSCRIPTION_LIST' => 'Désabonnées',
    'LBL_SUBSCRIPTION_LIST' => 'Abonnées',
    'LBL_MRKT_NAME' => 'Nom de l\'E-mail Marketing',
    'LBL_MRKT_NAME_FIELD' => 'Nom de l\'E-mail Marketing :',
    'LBL_TEST_LIST' => 'Testeurs',
    'LBL_WIZARD_HEADER_MESSAGE' => 'Remplissez les champs suivants qui identifieront votre Campagne',
    'LBL_WIZARD_BUDGET_MESSAGE' => 'Entrer le budget pour calculer le Retour sur Investissement (ROI)',
    'LBL_WIZARD_TARGET_MESSAGE1' => 'Sélectionner ou créer une liste cible à utiliser dans votre campagne. Cette liste sera utilisé lors de l\'envoi de mails avec vos messages de campagnes.',
    'LBL_WIZARD_TARGET_MESSAGE2' => 'Créer une nouvelle liste de cibles :',
    'LBL_WIZARD_TRACKER_MESSAGE' => 'Définir l\'URL de Tracking à utiliser avec cette campagne. Vous devez entrer le nom et l’URL pour créer le Traqueur.',
    'LBL_HOME_START_MESSAGE' => 'Quelle campagne souhaitez-vous créer ?',
    'LBL_WIZARD_LAST_STEP_MESSAGE' => 'Vous ne pouvez pas continuer, vous êtes à la dernière étape.',
    'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'Vous ne pouvez pas revenir en arrière, vous êtes déjà à la première étape.',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Identification',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Budget',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'URLs du tracker de campagne',
    'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Cibles',
    'LBL_WIZ_MARKETING_TITLE' => 'Message',
    'LBL_WIZ_SENDMAIL_TITLE' => 'Sélectionnez l\'enregistrement de l’E-mail Marketing',
    'LBL_WIZ_EMAILTPL_TITLE' => 'Sélectionnez le modèle d\'E-mail',
    'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Résumé',
    'LBL_NAVIGATION_MENU_GEN1' => 'Identification',
    'LBL_NAVIGATION_MENU_GEN2' => 'Budget',
    'LBL_NAVIGATION_MENU_TRACKERS' => 'Tracker(s)',
    'LBL_NAVIGATION_MENU_MARKETING' => 'Marketing',
    'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Envoyer un email',
    'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Cibles',
    'LBL_NAVIGATION_MENU_SUMMARY' => 'Résumé',
    'LBL_NAVIGATION_MENU_SEND_EMAIL_AND_SUMMARY' => 'Envoyer l\'E-mail et le résumé',
    'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Les cibles de cette liste recevront les E-mails de la Newsletter.<br>Si vous ne spécifiez aucune liste, une liste vide sera créée automatiquement.',
    'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Les cibles de cette liste recevront PAS / PLUS les E-mails de la Newsletter.<br>Si vous ne spécifiez aucune liste, une liste vide sera créée automatiquement.',
    'LBL_TEST_TARGET_WIZARD_DESC' => 'Les cibles de cette liste recevront les E-mails de TEST de la Newsletter.<br>Si vous ne spécifiez aucune liste, une liste vide sera créée automatiquement.',
    'LBL_ADD_TRACKER' => 'Créer un Tracker',
    'LBL_CREATE_TARGET' => 'Créer',
    'LBL_SELECT_TARGET' => 'Utiliser une "Liste de Cibles" existante',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_START' => 'Continuer',
    'LBL_TOTAL_ENTRIES' => 'Inscris',
    'LBL_CONFIRM_SEND_SAVE' => 'Vous êtes sur le point de quitter et de poursuivre sur la page d\'envoi de Campagne E-mail. Souhaitez-vous sauvegarder et poursuivre ?',
    'LBL_NEWSLETTER WIZARD_TITLE' => 'Lettre d\'information :',
    'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Editer la lettre d\'information :',
    'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Editer la Campagne :',
    'LBL_SEND_AS_TEST' => 'Envoyer cet E-mail en mode TEST',
    'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Sauvegarder',
    'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Suivant',
    'LBL_TARGET_LISTS' => 'Listes de Cibles',
    'LBL_NO_SUBS_ENTRIES_WARNING' => 'Vous ne pouvez pas envoyer d\'E-mail marketing tant que votre liste d\'abonnement ne comporte pas au moins une entrée. Vous pouvez remplir votre liste après avoir terminé.',
    'LBL_NO_TARGET_ENTRIES_WARNING' => 'Vous ne pouvez pas envoyer d\'E-mail marketing tant que votre liste cible ne comporte pas au moins une entrée. Vous pouvez remplir votre liste après avoir terminé.',
    'LBL_NO_TARGETS_WARNING' => 'Vous ne pouvez pas envoyer d\'E-mail marketing tant que votre campagne ne comporte pas au moins une liste cible.',
    'LBL_NO_TARGET_ENTRIES_WARNING_NON_EMAIL' => 'Vous n’avez aucune cible associée dans vos listes de cibles choisies pour cette campagne.  Vous pouvez remplir votre liste après avoir terminé.',
    'LBL_NO_TARGETS_WARNING_NON_EMAIL' => 'Vous n’avez pas sélectionné votre liste cible pour cette campagne.',
    'LBL_NONE' => 'Aucune liste séléctionnée',
    'LBL_CAMPAIGN_WIZARD' => 'Nouvelle Campagne (Assistant)',
    'LBL_EMAIL' => 'E-mail',
    'LBL_OTHER_TYPE_CAMPAIGN' => 'Campagnes non basée sur des E-mails',
    'LBL_TARGET_LIST' => 'Liste des cibles',
    'LBL_TARGET_TYPE' => 'Type de liste cible :',
    'LBL_TARGET_NAME' => 'Nom de la liste cible',
    'LBL_NUMBER_OF_TARGET' => 'Nombre de cibles',
    'LBL_EMAILS_SCHEDULED' => 'E-mails planifiés',
    'LBL_TEST_EMAILS_SENT' => 'Tester l\'envoi des E-mails',
    'LBL_USERS_CANNOT_OPTOUT' => 'Les utilisateurs systèmes ne peuvent pas se désinscrire des E-mails qu\'ils recevront.',
    'LBL_ELECTED_TO_OPTOUT' => 'Vous avez choisi de vous désinscrire et de ne plus recevoir d\'E-mails.',
    'LBL_COPY_OF' => 'Copie de',
    'LBL_SAVED_SEARCH' => 'Sauvegarder recherche & mise en page',
    //email setup wizard
    'LBL_WIZ_FROM_NAME' => 'Nom de l&#39;expéditeur :',
    'LBL_WIZ_FROM_ADDRESS' => 'E-mail de l\'expéditeur :',
    'LBL_EMAILS_PER_RUN' => 'Nombre d\'E-mails envoyés par lot :',
    'LBL_CUSTOM_LOCATION' => 'Personnalisé',
    'LBL_DEFAULT_LOCATION' => 'Par défaut',
    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Seules les valeurs entières sont permises pour le Nombre d\'E-mails envoyés par lots',
    'LBL_LOCATION_TRACK' => 'Localisation du "tracker" (campaign_tracker.php) :',
    'LBL_MAIL_SENDTYPE' => 'Agent de Transfert Mail :',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser l&#39;authentification&nbsp;SMTP ?',
    'LBL_MAIL_SMTPPASS' => 'Mot de passe SMTP :',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Serveur SMTP',
    'LBL_MAIL_SMTPUSER' => 'Utilisateur SMTP',
    'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Paramétrages liés aux E-mails',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valeur du paramètre site_url dans le fichier config.php',
    'LBL_NOTIFY_TITLE' => 'Options pour les notifications par E-mails',
    'LBL_MASS_MAILING_TITLE' => 'Options pour l\'envoi de masse des E-mails',
    'LBL_SERVER_TYPE' => 'Protocole du Serveur Mail',
    'LBL_SERVER_URL' => 'Serveur Mail',
    'LBL_LOGIN' => 'Nom d\'utilisateur',
    'LBL_PORT' => 'Port du Serveur Mail',
    'LBL_MAILBOX_NAME' => 'Nom de la boîte Mail',
    'LBL_PASSWORD' => 'Mot de Passe',
    'LBL_MAILBOX_DEFAULT' => 'Boite de réception',
    'LBL_MAILBOX' => 'Dossier surveillé',
    'LBL_NAVIGATION_MENU_SETUP' => 'Configuration',
    'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Gestion des Retours',
    'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'boîte(s) Mail de gestion des retours a été détectée(s).<br>Vous n&#39;avez pas besoin d&#39;en créer une nouvelle, mais vous pouvez toujours le faire si vous le souhaitez.<br>&nbsp;',
    'LBL_MAILBOX_CHECK_WIZ_BAD' => 'Aucune boîte mail avec interception des bounce détectée, merci d&#39;en créer une ci-dessous.',
    'LBL_CAMP_MESSAGE_COPY' => 'Garder une copie des messages envoyés via les Campagnes :',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Voulez-vous stocker une copie complète de <bold>CHAQUE</bold> E-mail envoyé durant toutes les campagnes ?  <bold>Par défaut cette valeur est positionné à Non, c"est aussi ce que nous recommandons</bold>. En choisissant Non, uniquement le modèle du mail sera stocké et les variables seront nécessaires pour re-créer les messages individuels.',
    'LBL_YES' => 'Oui',
    'LBL_NO' => 'Non',
    'LBL_EMAIL_SETUP_DESC' => 'Remplissez le formulaire ci-dessous pour modifier les paramètres Système SuiteCRM utilisés pour envoyer les E-mails de Campagne.',
    'LBL_CREATE_MAILBOX' => 'Créer une nouvelle Boîte Mail',
    'LBL_SSL_DESC' => 'Si votre Serveur E-mail supporte les connexions sécurisées, les activer forcera l\'utilisation de connexions SSL quand vous importerez vos E-mails.',
    'LBL_SSL' => 'Utiliser SSL',
    //campaign diagnostics
    'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'La campagne ne peut pas fonctionner comme désiré et vos E-mails ne peuvent pas être envoyés pour les raisons suivantes :',
    'LBL_CAMPAIGN_DIAGNOSTICS' => 'Diagnostiques',
    'LBL_MAILBOX_CHECK1_GOOD' => ' boîte(s) mail de gestion des rebonds détectée(s):',
    'LBL_MAILBOX_CHECK1_BAD' => 'Aucune boîte(s) Mail de gestion des rebonds détectée.',
    'LBL_MAILBOX_CHECK2_GOOD' => ' Les paramètres liés aux E-mails sont correctement configurés.',
    'LBL_MAILBOX_CHECK2_BAD' => 'Veuillez configurer votre adresse e-mail système. Les paramètres de messagerie n\'ont pas été configurés ou ne sont pas valides. L\'adresse \\"From\\" ne doit pas contenir exemple.com.',
    'LBL_SCHEDULER_CHECK_GOOD' => 'Planificateurs détectés',
    'LBL_SCHEDULER_CHECK_BAD' => 'Aucun planificateur détecté',
    'LBL_SCHEDULER_CHECK1_BAD' => 'Aucun planificateur n\'a pas été mis en place pour traiter les retours des E-mails de Campagnes (E-mails invalides, rebonds, boîte cible pleine, etc).',
    'LBL_SCHEDULER_CHECK2_BAD' => 'Aucun planificateur n\'a été mis en place pour traiter les envois d\'E-mails de Campagnes.',
    'LBL_SCHEDULER_NAME' => 'Planificateur',
    'LBL_SCHEDULER_STATUS' => 'Statut',
    'LBL_EMAIL_SETUP_WIZ' => 'Lancer la configuration E-mail',
    'LBL_SCHEDULER_LINK' => 'aller à l&#39;écran d&#39;administration des planificateurs.',
    'LBL_TO_WIZARD_TITLE' => 'Assistant',
    'LBL_EDIT_EXISTING' => 'Editer',
    'LBL_SEND_EMAIL' => 'Envoyer l\'E-mail à l\'heure planifiée',
    'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Créer un nouveau Message',
    'LBL_NON_ADMIN_ERROR_MSG' => 'Notifiez votre administrateur système pour qu&#39;il puisse corriger ce problème',
    'LBL_EMAIL_COMPONENTS' => 'Composant E-mail',
    'LBL_SCHEDULER_COMPONENTS' => 'Composant Planificateur',
    'LBL_RECHECK_BTN' => 'Re-Vérifier',
    //web to lead wizard titles
    'LBL_DEFINE_LEAD_HEADER' => 'Titre :',
    'LBL_LEAD_DEFAULT_HEADER' => 'Formulaire web de capture de prospects pour la campagne',
    'LBL_DEFINE_LEAD_SUBMIT' => 'Libellé du bouton d&#39;envoi :',
    'LBL_DEFINE_LEAD_POST_URL' => 'URL d&#39;envoi :',
    'LBL_EDIT_LEAD_POST_URL' => 'Editer l&#39;URL d&#39;envoi?',
    'LBL_DEFINE_LEAD_REDIRECT_URL' => 'URL de redirection :',
    'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Campagne liée :',
    'LBL_DEFAULT_LEAD_SUBMIT' => 'Envoyer',
    'LBL_WEB_TO_LEAD' => 'Créer un formulaire de contact',
    'LBL_LEAD_FOOTER' => 'Texte apparaissant au dessous du formulaire :',
    'NTC_NO_LEGENDS' => 'Aucun',
    'NTC_DELETE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
    'NTC_SNOOZE_CONFIRMATION' => 'Êtes-vous sûr de vouloir reporter ?',
    'LBL_DESCRIPTION_LEAD_FORM' => 'Texte apparaissant au dessus du formulaire :',
    'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Soumettre le formulaire créera un prospect et le liera à la campagne',
    'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => 'Veuillez télécharger votre formulaire conversion "Web to Lead"',
    'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Page Web d\'un formulaire pour une personne',
    'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Merci de renseigner tous les champs requis',
    'LBL_NOT_VALID_EMAIL_ADDRESS' => 'Adresse E-mail invalide',
    'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Merci de sélectionner les champs requis :',
    //Campaign charts
    'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Retour sur Investissement de la Campagne',
    'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Résultats de la Campagne',
    'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Supprimés par E-mail adresse ou domaine',

    'LBL_AMOUNT_IN' => 'Montant en',

    // Labels for ROI Chart
    'LBL_ROI_CHART_REVENUE' => 'Revenu',
    'LBL_ROI_CHART_INVESTMENT' => 'Investissement',
    'LBL_ROI_CHART_BUDGET' => 'Budget',
    'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Recettes attendues',

    // Top Campaigns Dashlet
    'LBL_TOP_CAMPAIGNS' => 'Top Campagne',
    'LBL_TOP_CAMPAIGNS_NAME' => 'Nom de la campagne',
    'LBL_TOP_CAMPAIGNS_REVENUE' => 'Revenu',
    'LBL_TOP_CAMPAIGNS_DESCRIPTION' => 'Top des campagnes les plus performantes par revenue',
    'LBL_LEADS' => 'Leads',
    'LBL_CONTACTS' => 'Contacts',
    'LBL_ACCOUNTS' => 'Comptes',
    'LBL_OPPORTUNITIES' => 'Affaires',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_LOG_ENTRIES' => 'Suivis (logs)',
    'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'E-mails invalides',
    'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Erreurs d&#39;envoi',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affaires',

    'LBL_LEAD_FORM_WIZARD' => 'Assistant de formulaire de capture de prospects',
    'LBL_CAMPAIGN_INFORMATION' => 'Aperçu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDIT_BUTTON' => 'Assistant',
    'LBL_YEAR' => "Année",
    'LBL_DAY' => "Jour",
    'LBL_EDIT_LAYOUT' => 'Modifier la mise en page' /*for 508 compliance fix*/,
    'LBL_INVALID' => 'Invalide' /*for 508 compliance fix*/,
    'LBL_VALID' => 'Valide' /*for 508 compliance fix*/,
    'LBL_ALERT' => 'Alerte' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Assistant' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Supprimer' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Voir',
    'ERR_NO_OPTS_SAVED' => 'Pas de paramètres optimaux sauvegardés avec votre boîte E-mail entrante.',
    'ERR_REVIEW_EMAIL_SETTINGS' => 'Veuillez revoir vos paramètre E-mails entrants.',
    'LBL_LEADS_DELETED_SINCE_CREATED' => '{0} leads qui ont été créés par cette campagne ont été effacés depuis la création.',
    'LBL_FROM_NAME_HELP' => 'Ce sera le nom que votre destinataire verra s\'afficher',
    'LBL_FROM_ADDR_HELP' => 'Il s’agit de l’adresse que le destinataire verra s’afficher',
    'LBL_REPLY_TO_NAME_HELP' => 'Ce sera le nom auquel votre destinataire répondra',
    'LBL_REPLY_TO_ADDR_HELP' => 'Ce sera l\'E-mail auquel vos destinataires répondront',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Voir les Comptes d\'E-mail sortant',
    'LBL_CREATE_EMAIL_TEMPLATE_BTN' => 'Sauvegarder',
    'LBL_SAVE_EMAIL_TEMPLATE_BTN' => 'Sauvegarder',
    'LBL_SEARCH_TARGET_LIST' => 'Filtre de liste cible',
    'LBL_INSERT_URL_REF' => 'Insérer URL référence',
    'LBL_INSERT_TRACKER_URL' => 'Insérer URL tracker :',
    'LBL_CREATE_TRACKER_BTN' => 'Créer un Tracker',
    'LBL_INSERT_TRACKER_BTN' => 'Insérer le Tracker',
    'LBL_EDIT_TRACKER_BTN' => 'Modifier le Tracker',
    'LBL_CREATE_TRACKER_URL' => '-- Créer --',
    'LBL_INSERT' => 'Insérer',
    'LBL_INSERT_VARIABLE' => 'Insérer :',
    'LBL_INSERT_VARIABLE_BTN' => 'Insérer la variable',
    'LBL_INSERT_VARIABLE_SUBJECT_BTN' => 'Insérer la variable',
    'LBL_EMAIL_VARIABLES' => 'Variables de l\'E-mail',
    'LBL_SAVE' => 'Sauvegarder',
    'ERR_REQUIRED_TRACKER_NAME' => 'Un nom est requis pour le Tracker',
    'ERR_REQUIRED_TRACKER_URL' => 'L&#39; URL du Tracker est requise',
    'LBL_UPDATE_TEMPLATE' => 'Mettre à jour le modèle',
    'LBL_ATTACHMENTS' => 'Pièce(s)&nbsp;jointe(s)',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Champs Obligatoires Manquants',
    'LBL_SUITE_DOCUMENT' => 'Document',
    'LBL_UPLOAD_FILE' => 'Déposer fichier',
    'LBL_EMAIL_ATTACHMENT' => 'Pièce jointe',
    'LBL_PROCESS_BOUNCED_EMAILS' => 'Traiter les E-mails avec rebonds',
    'LBL_PROCESS_CAMPAIGN_EMAILS' => 'Traiter les E-mails des campagnes',
    'LBL_SENDER_DETAILS' => 'Détails de l\'expéditeur',
    'LBL_CHOOSE_TEMPLATES' => 'Choisir un modèle',
    'LBL_CHOOSE_TARGETS' => 'Choisir des cibles',
    'LBL_CAMPAIGN_DETAILS_AND_CONDITIONS' => 'Conditions et détails de la campagne',
    'LBL_OPEN_IN_NEW_WINDOW' => 'Ouvrir dans une nouvelle fenêtre...',
    'LBL_CREATE_MARKETING_RECORD' => 'Suivant',
    'LBL_NO_TEMPLATE_SELECTED' => 'Modèle d\'E-mail non sélectionné',
    'LBL_SELECT_TEMPLATE' => 'Modèles',
    'LBL_WIZARD_ADD_TARGET' => 'Ajouter à une liste de cibles existante :',
    'LBL_CLICK_TO_ADD' => 'Cliquez sur le(s) élément(s) de modèle à ajouter.',
    'LBL_CANCEL' => 'Annuler',
    'LBL_EMPTY_SUBJECT' => 'Le sujet de l’E-mail est vide. Êtes-vous sûr de que vouloir continuer ?',
    'LBL_OVERWRITE_QUESTION' => 'Êtes-vous sûr de que vouloir remplacer le modèle d’E-mail ?',
    'LBL_SELECT_EMAIL_TRACKER' => 'Veuillez sélectionner un tracker d\'E-mail.',
    'LBL_STEP_UNAVAILABLE' => 'Pour continuer cliquez sur le bouton suivant.',
    'LBL_STEP_INFO_CAMPAIGN_HEADER' => 'Veuillez entrer le nom de la campagne et sélectionnez le statut',
    'LBL_STEP_INFO_TARGET_LIST_NEWSLETTER' => 'Chaque campagne nécessite des listes de cible pour l’abonnement, le désabonnement et le test.  Lorsqu’une liste n’est pas spécifiée, une liste cible vide sera créée et sauvegardée.',
    'LBL_STEP_INFO_TARGET_LIST_NON_NEWSLETTER' => 'Sélectionnez votre liste cible pour cette campagne.',
    'LBL_STEP_INFO_EMAIL_TEMPLATE' => 'Sélectionner un modèle d’E-mail ou créer un nouveau modèle d\'E-mail.',
    'LBL_STEP_INFO_MARKETING' => 'S’il vous plaît sélectionnez les comptes de messagerie.',
    'LBL_NO_SUBJECT' => 'Le modèle d’E-mail sélectionné n\'a pas de sujet',
    'LBL_NO_HTML_BODY_CONTENTS' => 'Le modèle d’E-mail sélectionné n’a pas de balise <body> s',
    'LBL_NO_SELECTED_TEMPLATE' => 'Aucun modèle d\'e-mail sélectionné !',
    'LBL_NO_BODY_CONTENTS' => 'Le modèle d’E-mail sélectionné n’a pas un corps html',
    'LBL_ERROR_ON_MARKETING' => 'Champ(s) obligatoire(s) manquant',

    'LBL_NO_MARKETING_NAME' => 'Nom de l’enregistrement Marketing est vide',
    'LBL_NO_INBOUND_EMAIL_SELECTED' => 'Compte de messagerie entrant Marketing non sélectionné',
    'LBL_NO_DATE_START' => 'Enregistrement Marketing n’a pas une date de début',
    'LBL_NO_FROM_NAME' => 'Nom de l’expéditeur est vide',
    'LBL_NO_FROM_ADDR_OR_INVALID' => 'Adresse de l’expéditeur est vide ou non valide',
    'LBL_NEWSLETTER_TITLE' => ' Une campagne de newsletter est un type de campagne d’E-mail qui vous permet d’envoyer un E-mail à une liste cible unique.',
    'LBL_EMAIL_TITLE' => 'Une campagne d’E-mail est un type de campagne d’E-mail, qui vous permet d’envoyer un E-mail à plusieurs listes de cibles.',
    'LBL_NON_EMAIL_TITLE' => 'Une campagne hors E-mail est une campagne qui n’envoie pas d\'E-mail.',
    'LBL_TEMPLATE_SAVING' => 'Veuillez patienter, modèle en cours de sauvegarde...',
    'LBL_TEMPLATE_SAVED' => 'Modèle enregistré avec succès.',
    'LBL_PLEASE_SELECT_OPTION' => 'Sélectionnez l\'option que vous préférez',
    'LBL_OPTION_SELECT_TEMPLATE' => 'Sélectionner un modèle existant',
    'LBL_OPTION_CREATE_TEMPLATE' => 'Créer un nouveau modèle de marque',
    'LBL_OPTION_COPY_TEMPLATE' => 'Copier un modèle existant',
    'LBL_SUMMARY' => 'Résumé',
    'LBL_CAMPAIGN_CHECKLIST' => 'Liste de contrôle de la campagne',

    'LBL_EMAIL_MARKETING' => 'E-mail marketing',
    'LBL_QUEUE_ITEMS' => 'Éléments de la file d’attente',
    'LBL_PROSPECT_LISTS' => 'Listes de prospects',
    'LBL_SURVEYRESPONSES_CAMPAIGNS_FROM_SURVEYRESPONSES_TITLE' => 'Réponses au sondage',
    'LBL_CAMPAIGN_SURVEY' => "Sondage",
);
