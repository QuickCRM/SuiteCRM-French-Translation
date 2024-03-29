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
    //module
    'LBL_MODULE_NAME' => 'Documents',
    'LBL_MODULE_TITLE' => 'Documents : Accueil',
    'LNK_NEW_DOCUMENT' => 'Créer un Document',
    'LNK_DOCUMENT_LIST' => 'Liste des Documents',
    'LBL_DOC_REV_HEADER' => 'Versions de Document',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un Document',
    //vardef labels
    'LBL_NAME' => 'Nom du document',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_CATEGORY' => 'Catégorie',
    'LBL_SUBCATEGORY' => 'Sous Catégorie',
    'LBL_STATUS' => 'Statut',
    'LBL_CREATED_BY' => 'Créé par',
    'LBL_DATE_ENTERED' => 'Date de création',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_DELETED' => 'Supprimé',
    'LBL_MODIFIED' => 'Modifié par (ID)',
    'LBL_MODIFIED_USER' => 'Modifié par',
    'LBL_CREATED' => 'Créé par',
    'LBL_REVISIONS' => 'Révisions',
    'LBL_RELATED_DOCUMENT_ID' => 'ID du document lié',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID de la version du document lié',
    'LBL_IS_TEMPLATE' => 'Est un Modèle',
    'LBL_TEMPLATE_TYPE' => 'Type de Document',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
    'LBL_REVISION_NAME' => 'Numéro de version',
    'LBL_MIME' => 'Type Mime',
    'LBL_REVISION' => 'Version',
    'LBL_DOCUMENT' => 'Document relatif',
    'LBL_LATEST_REVISION' => 'Derniére version',
    'LBL_CHANGE_LOG' => 'Journal des modifications',
    'LBL_ACTIVE_DATE' => 'Date de mise à disposition',
    'LBL_EXPIRATION_DATE' => 'Date expiration',
    'LBL_FILE_EXTENSION' => 'Extension du fichier',
    'LBL_LAST_REV_MIME_TYPE' => 'Dernière révision Type Mime',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Non-spécifié',
    'LBL_HOMEPAGE_TITLE' => 'Mes documents',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Nouveau Document',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Nom du document :',
    'LBL_FILENAME' => 'Nom du Fichier :',
    'LBL_LIST_FILENAME' => 'Fichier :',
    'LBL_DOC_VERSION' => 'Version :',
    'LBL_FILE_UPLOAD' => 'Fichier :',

    'LBL_CATEGORY_VALUE' => 'Catégorie :',
    'LBL_LIST_CATEGORY' => 'Catégorie',
    'LBL_SUBCATEGORY_VALUE' => 'Sous Catégorie :',
    'LBL_DOC_STATUS' => 'Statut :',
    'LBL_LAST_REV_CREATOR' => 'Version initialisée par :',
    'LBL_LASTEST_REVISION_NAME' => 'Nom de la dernière révision :',
    'LBL_SELECTED_REVISION_NAME' => 'Nom de la révision sélectionné :',
    'LBL_CONTRACT_STATUS' => 'Statut contrat :',
    'LBL_CONTRACT_NAME' => 'Nom du contrat :',
    'LBL_DET_RELATED_DOCUMENT' => 'Document relatif :',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Version du Document lié :",
    'LBL_DET_IS_TEMPLATE' => 'Modèle ? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Type de document :',
    'LBL_DOC_DESCRIPTION' => 'Description :',
    'LBL_DOC_ACTIVE_DATE' => 'Date de publication :',
    'LBL_DOC_EXP_DATE' => 'Date d&#39;Expiration :',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Liste des documents',
    'LBL_LIST_DOCUMENT' => 'Document',
    'LBL_LIST_SUBCATEGORY' => 'Sous Catégorie',
    'LBL_LIST_REVISION' => 'Version',
    'LBL_LIST_LAST_REV_CREATOR' => 'Publié par',
    'LBL_LIST_LAST_REV_DATE' => 'Date version',
    'LBL_LIST_VIEW_DOCUMENT' => 'Voir',
    'LBL_LIST_ACTIVE_DATE' => 'Date de mise à disposition',
    'LBL_LIST_EXP_DATE' => 'Date expiration',
    'LBL_LIST_STATUS' => 'Statut',
    'LBL_LINKED_ID' => 'Id lié',
    'LBL_SELECTED_REVISION_ID' => 'ID de la révision sélectionné',
    'LBL_LATEST_REVISION_ID' => 'ID de la dernière révision',
    'LBL_SELECTED_REVISION_FILENAME' => 'Nom du fichier de la révision sélectionné',
    'LBL_FILE_URL' => 'URL Fichier',

    //document search form.
    'LBL_SF_CATEGORY' => 'Catégorie :',
    'LBL_SF_SUBCATEGORY' => 'Sous Catégorie :',

    'DEF_CREATE_LOG' => 'Document créé',

    //error messages
    'ERR_DOC_NAME' => 'Nom du document',
    'ERR_DOC_ACTIVE_DATE' => 'Date de mise à disposition',
    'ERR_FILENAME' => 'Nom Fichier',
    'ERR_DOC_VERSION' => 'Version du Document',
    'ERR_DELETE_CONFIRM' => 'Voulez vous effacer cette version du document?',
    'ERR_DELETE_LATEST_VERSION' => 'Vous n&#39;êtes pas autorisé à effacer la dernière version d&#39;un document.',
    'LNK_NEW_MAIL_MERGE' => 'Fusion d\'E-mails',
    'ERR_MISSING_FILE' => 'Ce document ne contient pas de fichier, probablement à cause d&#39;une erreur lors du transfert. Veuillez essayer de nouveau ou contacter votre administrateur.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Nom',
    'LBL_LIST_IS_TEMPLATE' => 'Modèle ?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Type de Document',
    'LBL_LAST_REV_CREATE_DATE' => 'Date de dernière Révision Créée',
    'LBL_CONTRACTS' => 'Contrats',
    'LBL_CREATED_USER' => 'Créé par',
    'LBL_DOCUMENT_INFORMATION' => 'Aperçu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ID du document orignal',
    'LBL_DOC_TYPE' => 'Origine',
    'LBL_DOC_TYPE_POPUP' => 'Sélectionner la source vers laquelle ce document sera envoyé et à partir de laquelle il sera disponible',
    'LBL_DOC_URL' => 'URL du document orignal',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nom du fichier',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Les 20 premiers fichiers les plus récemment modifiés sont affichés dans l&#39;ordre décroissant ci-dessous. Utilisez la recherche pour trouver d&#39;autres fichiers.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nom du fichier',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'L&#39;utilisateur tente d&#39;accéder à une API externe invalide ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'La vérification du login a échoué pour l&#39;API externe ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affaires',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Anomalies',

    'LBL_AOS_CONTRACTS' => 'Contrats',
);
