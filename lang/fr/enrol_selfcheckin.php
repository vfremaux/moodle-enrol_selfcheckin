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
 * Strings for component 'enrol_selfcheckin', language 'fr'.
 *
 * @package    enrol_selfcheckin
 * @copyright  2023 Valery Fremaux (valery.fremaux@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['advanced'] = 'Avancé';
$string['alterstatus'] = 'Changer l\'état';
$string['altertimeend'] = 'Changer la date de fin';
$string['altertimestart'] = 'Changer la date de début';
$string['assignrole'] = 'Assigner un rôle';
$string['assignroles'] = 'Assigner des rôles';
$string['browseusers'] = 'Voir les utilisateurs';
$string['browsecohorts'] = 'Voir les cohortes';
$string['confirmbulkdeleteenrolment'] = 'Etes vous certain(e) de vouloir supprimer ces inscriptions ?';
$string['defaultstart'] = 'Date de début par défaut';
$string['defaultperiod'] = 'Période d\'inscription par défaut';
$string['defaultperiod_desc'] = 'Durée de validité de l\'inscription par défaut. Si nul, c\'est la date de fin d\'inscription qui joue si elle est non nulle.';
$string['defaultperiod_help'] = 'Durée de validité de l\'inscription par défaut. Si nul, c\'est la date de fin d\'inscription qui joue si elle est non nulle.';
$string['deleteselectedusers'] = 'Supprimer les inscriptions sélectionnées';
$string['editselectedusers'] = 'Modifier les inscriptions sélectionnées';
$string['enrolledincourserole'] = 'Inscrit dans le cours "{$a->course}" comme "{$a->role}"';
$string['enrolusers'] = 'Inscrire les utilisateurs';
$string['enroluserscohorts'] = 'Inscrire les utilisateurs et cohortes';
$string['expiredaction'] = 'Action lors de la désinscription';
$string['expiredaction_help'] = 'Choisissez une action à effectuer lorsque l\'inscription se termine. Notez que certaines données utilisateur peuvent être effactées du cours lors de la désinscription.';
$string['expirymessageenrollersubject'] = 'Notification de fin d\'inscription';
$string['expirymessageenrollerbody'] = 'L\'inscription dans le cours \'{$a->course}\' va expirer dans {$a->threshold} pour les utilisateurs :

{$a->users}

Pour proroger leur inscription, allez à l\'url {$a->extendurl}';
$string['expirymessageenrolledsubject'] = 'Notification de fin d\'incription ';
$string['expirymessageenrolledbody'] = 'Cher {$a->user},

Ceci vous prévient que votre inscription au cours \'{$a->course}\' va se terminer le {$a->timeend}.

si vous avez besoin d\'assistance, contactez {$a->enroller}.';
$string['selfcheckin:config'] = 'Peut configurer les instances de méthodes d\'inscription';
$string['selfcheckin:enrol'] = 'Peut inscrire des utilisateurs par la méthode Auto Enregistrement';
$string['selfcheckin:manage'] = 'Peut gérer les inscrits par la méthode Auto Enregistrement';
$string['selfcheckin:unenrol'] = 'Peut désincrire les utilisateurs du cours';
$string['selfcheckin:unenrolself'] = 'Peut se désincrire du cours';
$string['messageprovider:expiry_notification'] = 'Notifications de désinscription d\'auto-enregistrement';
$string['now'] = 'Maintenant';
$string['pluginname'] = 'Auto-enregistrement par QRCode';
$string['pluginname_desc'] = 'Le plugin Auto-Enregistrement par QRCode permet de s\'inscrire automatiquement à un cours juste après sa création de compte dans Moodle.';
$string['selection'] = 'Sélection';
$string['selectusers'] = 'Sélectionner les utilisateurs';
$string['selectcohorts'] = 'Sélectionner les cohortes';
$string['sendexpirynotificationstask'] = "Tâche d\'émission des notifications de désinscription";
$string['status'] = 'Activer l\'inscription par Auto-Enregistrement';
$string['status_desc'] = 'Permet l\'accès au cours par les utilisateurs s\'étant auto-enregistrés dans Moodle.';
$string['status_help'] = 'This setting determines whether users can be enrolled manually, via a link in the course administration settings, by a user with appropriate permissions such as a teacher.';
$string['statusenabled'] = 'Activé';
$string['statusdisabled'] = 'Désactivé';
$string['syncenrolmentstask'] = 'Tâche de synchronisation des inscriptions par auto-enregistrement';
$string['unenrol'] = 'Désincrire l\'utilisateur';
$string['unenrolselectedusers'] = 'Désinscrire les utilisateurs sélectionnés';
$string['unenrolselfconfirm'] = 'Voulez-vous vraiment vous désinscrire du cours "{$a}"?';
$string['unenroluser'] = 'Voulez-vous vraiment désinscrire "{$a->user}" du cours "{$a->course}"?';
$string['unenrolusers'] = 'Désinscrire les utilisateurs';
$string['wscannotenrol'] = 'L\'instance de plugin ne peut inscrire l\'utilisateur dans le cours d\'id = {$a->courseid}';
$string['wsnoinstance'] = 'Manual enrolment plugin instance doesn\'t exist or is disabled for the course (id = {$a->courseid})';
$string['wsusercannotassign'] = 'You don\'t have the permission to assign this role ({$a->roleid}) to this user ({$a->userid}) in this course ({$a->courseid}).';
$string['selfcheckinpluginnotinstalled'] = 'Le plugin Auto-Enregistrement n\'est pas encore installé';
$string['privacy:metadata'] = 'Le plugin Auto-Enregistrement ne stocke pas de données personnelles par lui même.';
$string['obsoleteticket'] = 'Le ticket présenté est passé de date.';
