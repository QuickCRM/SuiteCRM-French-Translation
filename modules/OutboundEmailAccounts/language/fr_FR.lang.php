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
    'LBL_ASSIGNED_TO_ID' => 'Assigné à (ID)',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date de création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_MODIFIED_NAME' => 'Modifié par (Nom)',
    'LBL_CREATED' => 'Créé par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Nom',
    'LBL_CREATED_USER' => 'Créé par l\'utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par l\'utilisateur',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_EDIT_BUTTON' => 'Modifier',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_LIST_FORM_TITLE' => 'Liste de comptes d\'E-mail sortant',
    'LBL_MODULE_NAME' => 'Comptes d\'E-mail sortant',
    'LBL_MODULE_TITLE' => 'Comptes d\'E-mail sortant',
    'LBL_HOMEPAGE_TITLE' => 'Mes comptes d\'E-mail sortant',
    'LNK_NEW_RECORD' => 'Créer des comptes d\'E-mail sortant',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Nouveau compte personnel',
    'LNK_LIST_CREATE_NEW_GROUP' => 'Nouveau compte de groupe',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => 'Comptes d\'E-mail sortant',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Inbound Email Accounts',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher des comptes d\'E-mail sortant',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Afficher l\'historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouveau comptes d\'E-mail sortant',
    'LBL_USERNAME' => 'Nom d\'utilisateur',
    'LBL_PASSWORD' => 'Mot de Passe',
    'LBL_SMTP_SERVERNAME' => 'Nom du serveur SMTP',
    'LBL_SMTP_AUTH' => 'Authentification SMTP',
    'LBL_SMTP_PORT' => 'Port SMTP',
    'LBL_SMTP_PROTOCOL' => 'Protocole SMTP',
    'LBL_EDITVIEW_PANEL1' => 'Paramètres de compte',
    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Configuration du Serveur',
    'LBL_CHANGE_PASSWORD' => 'Changer le mot de passe',
    'LBL_SEND_TEST_EMAIL' => 'Envoyer un E-mail de test',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'L\'administrateur n\'a pas encore configuré de compte sortant par défaut. Impossible d\'envoyer l\'E-mail de test.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser l&#39;authentification SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Mot de Passe',
    'LBL_MAIL_SMTPPORT' => 'Port',
    'LBL_MAIL_SMTPSERVER' => 'Serveur',
    'LBL_MAIL_SMTPUSER' => 'Nom d\'utilisateur',
    'LBL_MAIL_SMTP_SETTINGS' => 'Spécification du serveur SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choisissez votre fournisseur de messagerie :',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe :',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail - Identifiant :',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - Mot de passe :',
    'LBL_GMAIL_SMTPUSER' => 'Adresse E-mail Gmail :',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe :',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom d\\\'utilisateur:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port SMTP :',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur :',

    'LBL_TYPE' => 'Type',
    'LBL_MAIL_SENDTYPE' => 'Type d’envoi d\'e-mail',
    'LBL_MAIL_SMTPSSL' => 'Messagerie SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'Nom de l\'expéditeur des e-mails',
    'LBL_SMTP_FROM_ADDR' => 'E-mail de l\'expéditeur',
    'LBL_REPLY_TO_NAME' => 'Nom de "Réponse à" :',
    'LBL_REPLY_TO_ADDR' => 'Adresse de "Répondre-à" : ',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Groupes de sécurité',

    'LBL_OWNER' => 'Assigné',
    'LBL_OWNER_NAME' => 'Assigné',

    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Connexions OAuth Externe'
);
