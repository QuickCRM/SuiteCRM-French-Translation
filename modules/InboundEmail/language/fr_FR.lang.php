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


    'LBL_RE' => 'RE :',

    'ERR_BAD_LOGIN_PASSWORD' => 'Utilisateur ou mot de passe incorrect',
    'ERR_INI_ZLIB' => 'Impossible de désactiver temporairement la compression Zlib. "Tester Paramétrage" peut échouer.',
    'ERR_NO_IMAP' => 'Librairie IMAP non trouvée. Merci de résoudre le problème avant de poursuivre le paramétrage des E-mails entrants',
    'ERR_NO_OPTS_SAVED' => 'Pas de paramètres optimaux sauvegardés avec votre boîte E-mail entrante. Merci de revoir les paramétrages',
    'ERR_TEST_MAILBOX' => 'Merci de vérifier vos Paramètres et essayer à nouveau.',

    'LBL_ASSIGN_TO_USER' => 'Assigner à l&#39;utilisateur',
    'LBL_AUTOREPLY' => 'Modèle de réponse automatique',
    'LBL_AUTOREPLY_HELP' => 'Sélectionner une réponse automatique de notification de réception.',
    'LBL_BASIC' => 'Paramètrages essentiels',
    'LBL_CASE_MACRO' => 'Mot clé Ticket',
    'LBL_CASE_MACRO_DESC' => 'Ce mot clé sera analysé et utilisé lors de la réception des E-mails entrants pour lier les E-mails dont le titre contient ce mot clé, au Ticket dont le numéro sera égal à la valeur de %1.',
    'LBL_CASE_MACRO_DESC2' => 'Choisir la chaîne de caractères souhaitée, mais préserver le <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Fermer fenêtre',
    'LBL_CREATE_TEMPLATE' => 'Créer',
    'LBL_DELETE_SEEN' => 'Supprimer les E-mails lus après l&#039;import.',
    'LBL_EDIT_TEMPLATE' => 'Modifier',
    'LBL_EMAIL_OPTIONS' => 'Paramètres optionnels',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Options de gestion des rebonds',
    'LBL_FILTER_DOMAIN_DESC' => 'Le domaine spécifié ne recevra pas de "Réponse automatique"',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Sélectionnez pour enregistrer automatiquement les E-mails dans SuiteCRM pour tous les E-mails entrants.',
    'LBL_FILTER_DOMAIN' => 'Pas de "Réponse automatique" pour le domaine',
    'LBL_FIND_SSL_WARN' => '<br>Le test SSL peut prendre un certain temps. Merci de patienter.<br>',
    'LBL_FROM_ADDR' => 'E-mail de l&#039;expéditeur',
    'LBL_FROM_ADDR_DESC' => 'L&#039;adresse e-mail renseignée ici peut ne pas apparaître dans le champ "De" de l&#039;e-mail envoyé à cause des restrictions imposées par votre fournisseur de service e-mail. Dans ce cas, l&#039;adresse e-mail définie pour le serveur d&#039;e-mail sortant sera utilisée.',
    'LBL_FROM_NAME' => 'Nom de l&#39;expéditeur',
    'LBL_GROUP_QUEUE' => 'Assigner à un Groupe',
    'LBL_HOME' => 'Accueil',
    'LBL_LIST_MAILBOX_TYPE' => 'Utilisation du compte E-mail',
    'LBL_LIST_NAME' => 'Nom :',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Type&nbsp;de&nbsp;Boîte',
    'LBL_LIST_SERVER_URL' => 'Serveur',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LOGIN' => 'Nom d&#039;utilisateur',
    'LBL_MAILBOX_DEFAULT' => 'Boite de réception',
    'LBL_MAILBOX_SSL' => 'Utiliser SSL',
    'LBL_MAILBOX_TYPE' => 'Actions possibles',
    'LBL_DISTRIBUTION_METHOD' => 'Méhtode de Distribution',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Modèle de Réponse pour une création de Ticket',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Sélectionnez une réponse automatique pour avertir les expéditeurs qu’un ticket a été créé. L\'E-mail contient le numéro de dossier dans son sujet et respecte les paramètres généraux du ticket. Cette réponse n’est envoyée qu\'après réception d\'un premier E-mail du demandeur.',
    'LBL_MAILBOX' => 'Dossier Contrôlé',
    'LBL_TRASH_FOLDER' => 'Dossier Poubelle',
    'LBL_SENT_FOLDER' => 'Dossier Envoyé',
    'LBL_SELECT' => 'Sélectionner',
    'LBL_MARK_READ_NO' => 'E-mail marqué effacé après Import',
    'LBL_MARK_READ_YES' => 'E-mail laissé sur le Serveur après Import',
    'LBL_MARK_READ' => 'Laisser les Messages sur le Seveur',
    'LBL_MAX_AUTO_REPLIES' => 'Nombre de "Réponses Automatiques"',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Nombre maximum de "Réponses Automatiques" envoyées par 24 heures à une même adresse E-mail.',
    'LBL_PERSONAL_MODULE_NAME' => 'Compte E-mail personnel',
    'LBL_CREATE_CASE' => 'Créer un Ticket',
    'LBL_CREATE_CASE_HELP' => 'Sélectionnez cette option pour créer automatiquement des enregistrements dans SuiteCRM depuis des E-mails entrants.',
    'LBL_MODULE_NAME' => 'Compte E-mail Groupe',
    'LBL_BOUNCE_MODULE_NAME' => 'Compte E-mail de gestion des rebonds',
    'LBL_MODULE_TITLE' => 'E-mails entrants',
    'LBL_NAME' => 'Nom',
    'LBL_NONE' => 'Aucun',
    'LBL_ONLY_SINCE_NO' => 'Non. Vérifier tous les E-mails sur le serveur E-mail.',
    'LBL_ONLY_SINCE_YES' => 'Oui.',
    'LBL_PASSWORD' => 'Mot de Passe',
    'LBL_POP3_SUCCESS' => 'Test de connexion POP3 --> réussi.',
    'LBL_POPUP_TITLE' => 'Test du Paramétrage',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Sélectionner les Dossiers sousscrits',
    'LBL_SELECT_TRASH_FOLDERS' => 'Sélectionner le Dossier Poubelle',
    'LBL_SELECT_SENT_FOLDERS' => 'Sélectionner le Dossier Envoyé',
    'LBL_DELETED_FOLDERS_LIST' => 'Le dossier %s n&#39;existe pas ou a été supprimé du serveur',
    'LBL_PORT' => 'Port du serveur Mail',
    'LBL_REPLY_TO_NAME' => 'Nom du "Répondre à"',
    'LBL_REPLY_TO_ADDR' => 'Adresse E-mail du "Répondre à"',
    'LBL_SAME_AS_ABOVE' => 'Utiliser adresse/nom émetteur',
    'LBL_SERVER_OPTIONS' => 'Options du Serveur Mail',
    'LBL_SERVER_TYPE' => 'Protocole du Serveur Mail',
    'LBL_SERVER_URL' => 'Serveur Mail',
    'LBL_SSL_DESC' => 'Si votre Serveur E-mail supporte les connexions sécurisées, les activer forcera l\'utilisation de connexions SSL quand vous importerez vos E-mails.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'L\'équipe sélectionnée a accès au compte E-mail. Si un Dossier de Groupe est sélectionné, l\'équipe désignée pour le Dossier de Groupe surcharge l\'équipe sélectionnée.',
    'LBL_SSL' => 'Activer SSL',
    'LBL_STATUS' => 'Statut',
    'LBL_SYSTEM_DEFAULT' => 'Système par défaut',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Tester la connexion au Serveur Mail',
    'LBL_TEST_SUCCESSFUL' => 'Test de connexion réussi.',
    'LBL_TEST_WAIT_MESSAGE' => 'Veuillez patienter...',
    'LBL_WARN_IMAP_TITLE' => 'E-mail entrant désactivé',
    'LBL_WARN_IMAP' => 'Avertissements :',
    'LBL_WARN_NO_IMAP' => 'Le système n\'a pas les librairies c-client IMAP activées / compilées dans le module PHP (--with-imap=/path/to/imap_c-client_library). Veuillez contacter votre administrateur système pour activer cette librairie.',

    'LNK_LIST_CREATE_NEW_GROUP' => 'Nouvelle boîte de groupe',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nouvelle boîte de gestion de rebonds',
    'LNK_LIST_MAILBOXES' => 'Liste des boîtes E-mail',
    'LNK_LIST_SCHEDULER' => 'Planificateurs',
    'LNK_SEED_QUEUES' => 'Renseigner les files d&#39;attente depuis les équipes',
    'LBL_GROUPFOLDER_ID' => 'ID du Dossier de Groupe',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Autoriser les utilisateurs à envoyer des E-mails en utilisant les informations du "De" nom et adresse en adresse de réponse (reply-to).',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Lorsque cette option est sélectionnée, les informations "De" nom et adresse associée avec ce compte E-mail de groupe apparaitront en option pour le champ "De" lorsque les utilisateurs qui ont accès à cette boite composeront un E-mail.',
    'LBL_STATUS_ACTIVE' => 'Activé',
    'LBL_STATUS_INACTIVE' => 'Désactivé',
    'LBL_IS_PERSONAL' => 'Personnel',
    'LBL_IS_GROUP' => 'Groupe',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importer automatiquement les E-mails',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Attention: Vous allez modifier la configuration des imports automatiques. Vous risquez de perdre des données.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Attention : L&#039;import automatique des E-mails doit être activé pour la création automatique de tickets.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Brouillons',
    'LBL_LIST_TITLE_MY_INBOX' => 'Boîte de réception',
    'LBL_LIST_TITLE_MY_SENT' => 'Message envoyé',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'E-mails archivés',
    'LNK_MY_DRAFTS' => 'Brouillons',
    'LNK_MY_INBOX' => 'E-mail',
    'LNK_VIEW_MY_INBOX' => 'Voir les E-mails',
    'LNK_QUICK_REPLY' => 'Répondre',
    'LNK_SENT_EMAIL_LIST' => 'Messages envoyés',
    'LBL_EDIT_LAYOUT' => 'Modifier la mise en page' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Modifié par',
    'LBL_SERVICE' => 'Service',
    'LBL_STORED_OPTIONS' => 'Options stockées',
    'LBL_GROUP_ID' => 'ID Groupe',
    'LBL_REPLY_ASSIGNING_BEHAVIOR' => 'Assigner les réponses à', // PR 6009
    'LBL_REPLY_ASSIGNING_BEHAVIOR_HELP' => 'Lorsqu\'un courrier électronique entrant est une réponse à un courrier électronique envoyé par SuiteCRM, la réponse est affectée à :<br><br> <b> Ne rien faire : </b>action par défaut. Le message n\'est attribué à personne.<br><br> <b> Réponse au propriétaire du courrier :</b> Le message est attribué au propriétaire du courrier de réponse, ou au dernier courrier envoyé par SuiteCRM dans le fil de discussion. <br> <br> <b>Propriétaire de l\'enregistrement associé :</b> Le courrier est attribué au propriétaire de l\'enregistrement auquel est associé le message de réponse ou le dernier e-mail envoyé par SuiteCRM dans le fil de discussion.', // PR 6009

    'LBL_CREATE_CONTACT' => 'Créer un contact à partir d\'un message', // PR 5721
    'LBL_CREATE_CONTACT_HELP' => 'Sélectionnez cette option pour créer automatiquement un contact dans SuiteCRM à partir de messages entrants.', // PR 5721
    'LBL_CONTACT_DEFAULT_LANGUAGE' => 'Langue par défaut du contact', // PR 5721
    'LBL_FILL_CONTACT_NAME' => 'Renseigner le nom du contact', // PR 5721 - Escaped required
    'LBL_FILL_CONTACT_NAME_HELP' => 'Sélectionnez cette option pour renseigner automatiquement le prénom et le nom du nouveau contact créé à partir de messages entrants.', // PR 5721
    'LBL_CONTACT_DEFAULT_SOURCE' => 'Origine du nouveau contact', // PR 5721
    'LBL_NEW_CASE_STATUS' => 'Statut de la nouvelle requête', // PR 5721
    'LBL_NEW_CASE_PRIORITY' => 'Priorité de la nouvelle requête', // PR 5721
    'LBL_NEW_CASE_TYPE' => 'Type de la nouvelle requête', // PR 5721
);