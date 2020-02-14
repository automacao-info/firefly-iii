<?php

/**
 * form.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                 => 'Nom de la banque',
    'bank_balance'              => 'Solde',
    'savings_balance'           => 'Solde de l\'épargne',
    'credit_card_limit'         => 'Limite de carte de crédit',
    'automatch'                 => 'Correspondre automatiquement',
    'skip'                      => 'Ignorer',
    'enabled'                   => 'Activé',
    'name'                      => 'Nom',
    'active'                    => 'Actif',
    'amount_min'                => 'Montant minimum',
    'amount_max'                => 'Montant maximum',
    'match'                     => 'Correspondre à',
    'strict'                    => 'Mode strict',
    'repeat_freq'               => 'Répétitions',
    'location'                  => 'Emplacement',
    'update_channel'            => 'Canal de mise à jour',
    'journal_currency_id'       => 'Devise',
    'currency_id'               => 'Devise',
    'transaction_currency_id'   => 'Devise',
    'external_ip'               => 'L\'adresse IP externe de votre serveur',
    'attachments'               => 'Documents joints',
    'journal_amount'            => 'Montant',
    'journal_source_name'       => 'Compte de recettes (source)',
    'keep_bill_id'              => 'Facture',
    'journal_source_id'         => 'Compte d’actif (source)',
    'BIC'                       => 'Code BIC',
    'verify_password'           => 'Vérifiez la sécurité du mot de passe',
    'source_account'            => 'Compte d\'origine',
    'destination_account'       => 'Compte destinataire',
    'journal_destination_id'    => 'Compte d’actif (destination)',
    'asset_destination_account' => 'Compte destinataire',
    'include_net_worth'         => 'Inclure dans l\'avoir net',
    'asset_source_account'      => 'Compte d\'origine',
    'journal_description'       => 'Description',
    'note'                      => 'Notes',
    'store_new_transaction'       => 'Créer une nouvelle opération',
    'split_journal'               => 'Ventiler cette opération',
    'split_journal_explanation'   => 'Ventiler cette opération en plusieurs parties',
    'currency'                    => 'Devise',
    'account_id'                  => 'Compte d’actif',
    'budget_id'                   => 'Budget',
    'opening_balance'             => 'Solde initial',
    'tagMode'                     => 'Mode du tag',
    'tag_position'                => 'Localisation du tag',
    'virtual_balance'             => 'Solde virtuel',
    'targetamount'                => 'Montant cible',
    'account_role'                => 'Rôle du compte',
    'opening_balance_date'        => 'Date du solde initial',
    'cc_type'                     => 'Plan de paiement de carte de crédit',
    'cc_monthly_payment_date'     => 'Date de paiement mensuelle de la carte de crédit',
    'piggy_bank_id'               => 'Tirelire',
    'returnHere'                  => 'Retourner ici',
    'returnHereExplanation'       => 'Après enregistrement, revenir ici pour en créer un nouveau.',
    'returnHereUpdateExplanation' => 'Après mise à jour, revenir ici.',
    'description'                 => 'Description',
    'expense_account'             => 'Compte de dépenses',
    'revenue_account'             => 'Compte de recettes',
    'decimal_places'              => 'Chiffres après la virgule',
    'exchange_rate_instruction'   => 'Devises étrangères',
    'source_amount'               => 'Montant (source)',
    'destination_amount'          => 'Montant (destination)',
    'native_amount'               => 'Montant natif',
    'new_email_address'           => 'Nouvelle adresse email',
    'verification'                => 'Vérification',
    'api_key'                     => 'Clé API',
    'remember_me'                 => 'Se souvenir de moi',
    'liability_type_id'           => 'Type de passif',
    'interest'                    => 'Intérêt',
    'interest_period'             => 'Période d’intérêt',

    'source_account_asset'        => 'Compte source (compte d\'actif)',
    'destination_account_expense' => 'Compte de destination (compte de dépenses)',
    'destination_account_asset'   => 'Compte de destination (compte d’actif)',
    'source_account_revenue'      => 'Compte source (compte recettes)',
    'type'                        => 'Type',
    'convert_Withdrawal'          => 'Convertir le retrait',
    'convert_Deposit'             => 'Convertir le dépôt',
    'convert_Transfer'            => 'Convertir le transfert',

    'amount'                      => 'Montant',
    'foreign_amount'              => 'Montant en devise étrangère',
    'existing_attachments'        => 'Pièces jointes existantes',
    'date'                        => 'Date',
    'interest_date'               => 'Date de l’intérêt',
    'book_date'                   => 'Date de réservation',
    'process_date'                => 'Date de traitement',
    'category'                    => 'Catégorie',
    'tags'                        => 'Tags',
    'deletePermanently'           => 'Supprimer définitivement',
    'cancel'                      => 'Annuler',
    'targetdate'                  => 'Date cible',
    'startdate'                   => 'Date de début',
    'tag'                         => 'Tag',
    'under'                       => 'En dessous de',
    'symbol'                      => 'Symbole',
    'code'                        => 'Code',
    'iban'                        => 'Numéro IBAN',
    'account_number'              => 'Numéro de compte',
    'creditCardNumber'            => 'Numéro de carte de crédit',
    'has_headers'                 => 'Entêtes ',
    'date_format'                 => 'Format de la date',
    'specifix'                    => 'Banque - ou déposer des corrections spécifiques',
    'attachments[]'               => 'Pièces jointes',
    'store_new_withdrawal'        => 'Enregistrer une nouvelle dépense',
    'store_new_deposit'           => 'Enregistrer un nouveau dépôt',
    'store_new_transfer'          => 'Enregistrer un nouveau transfert',
    'add_new_withdrawal'          => 'Ajouter un nouveau retrait',
    'add_new_deposit'             => 'Ajouter un nouveau dépôt',
    'add_new_transfer'            => 'Ajouter un nouveau transfert',
    'title'                       => 'Titre',
    'notes'                       => 'Notes',
    'filename'                    => 'Nom du fichier',
    'mime'                        => 'Type Mime',
    'size'                        => 'Taille',
    'trigger'                     => 'Déclencheur',
    'stop_processing'             => 'Arrêter le traitement',
    'start_date'                  => 'Début de l\'étendue',
    'end_date'                    => 'Fin de l\'étendue',
    'include_attachments'         => 'Inclure les pièces jointes téléchargées',
    'include_old_uploads'         => 'Inclure les données importées',
    'delete_account'              => 'Supprimer le compte ":name"',
    'delete_bill'                 => 'Supprimer la facture ":name"',
    'delete_budget'               => 'Supprimer le budget ":name"',
    'delete_category'             => 'Supprimer la catégorie ":name"',
    'delete_currency'             => 'Supprimer la devise ":name"',
    'delete_journal'              => 'Supprimer l\'opération ayant comme description ":description"',
    'delete_attachment'           => 'Supprimer la pièce jointe ":name"',
    'delete_rule'                 => 'Supprimer la règle ":title"',
    'delete_rule_group'           => 'Supprimer le groupe de filtres ":title"',
    'delete_link_type'            => 'Supprimer le type de lien ":name"',
    'delete_user'                 => 'Supprimer l\'utilisateur ":email"',
    'delete_recurring'            => 'Supprimer l\'opération périodique ":title"',
    'user_areYouSure'             => 'Si vous supprimez l\'utilisateur ":email", tout sera perdu. Il n\'y a pas d\'annulation, de restauration ou quoi que ce soit de la sorte. Si vous supprimez votre propre compte, vous n\'aurez plus accès à cette instance de Firefly III.',
    'attachment_areYouSure'       => 'Êtes-vous sûr de vouloir supprimer la pièce jointe nommée ":name" ?',
    'account_areYouSure'          => 'Êtes-vous sûr de vouloir supprimer le compte nommé ":name" ?',
    'bill_areYouSure'             => 'Êtes-vous sûr de vouloir supprimer la facture nommée ":name" ?',
    'rule_areYouSure'             => 'Êtes-vous sûr de vouloir supprimer la règle intitulée ":title" ?',
    'ruleGroup_areYouSure'        => 'Êtes-vous sûr de vouloir supprimer le groupe de règles intitulé ":title" ?',
    'budget_areYouSure'           => 'Êtes-vous sûr de vouloir supprimer le budget nommé ":name" ?',
    'category_areYouSure'         => 'Êtes-vous sûr de vouloir supprimer la catégorie nommée ":name" ?',
    'recurring_areYouSure'        => 'Êtes-vous sûr de vouloir supprimer l\'opération périodique intitulée ":title" ?',
    'currency_areYouSure'         => 'Êtes-vous sûr de vouloir supprimer la devise nommée ":name" ?',
    'piggyBank_areYouSure'        => 'Êtes-vous sûr de vouloir supprimer la tirelire nommée ":name" ?',
    'journal_areYouSure'          => 'Êtes-vous sûr de vouloir supprimer la description de l\'opération ":description" ?',
    'mass_journal_are_you_sure'   => 'Êtes-vous sûr de que vouloir supprimer ces opérations ?',
    'tag_areYouSure'              => 'Êtes-vous sûr de vouloir supprimer le tag ":tag" ?',
    'journal_link_areYouSure'     => 'Êtes-vous sûr de vouloir supprimer le lien entre <a href=":source_link">:source</a> et <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Êtes-vous sûr de vouloir supprimer le type de lien ":name" (":inward" / ":outward") ?',
    'permDeleteWarning'           => 'Supprimer quelque chose dans Firefly est permanent et ne peut pas être annulé.',
    'mass_make_selection'         => 'Vous pouvez toujours empêcher des éléments d’être supprimés en décochant la case à cocher.',
    'delete_all_permanently'      => 'Supprimer la sélection définitivement',
    'update_all_journals'         => 'Mettre à jour ces opérations',
    'also_delete_transactions'    => 'La seule opération liée à ce compte sera aussi supprimée.|Les :count opérations liées à ce compte seront aussi supprimées.',
    'also_delete_connections'     => 'La seule transaction liée à ce type de lien perdra cette connexion. | Toutes les transactions :count liées à ce type de lien perdront leur connexion.',
    'also_delete_rules'           => 'La seule règle liée à ce groupe de règles sera aussi supprimée.|Les :count règles liées à ce groupe de règles seront aussi supprimées.',
    'also_delete_piggyBanks'      => 'La seule tirelire liée à ce compte sera aussi supprimée.|Les :count tirelires liées à ce compte seront aussi supprimées.',
    'bill_keep_transactions'      => 'La seule opération liée à cette facture ne sera pas supprimée.|Les :count opérations liées à cette facture ne seront pas supprimées.',
    'budget_keep_transactions'    => 'La seule opération liée à ce budget ne sera pas supprimée.|Les :count opérations liées à ce budget ne seront pas supprimées.',
    'category_keep_transactions'  => 'La seule opération liée à cette catégorie ne sera pas supprimée.|Les :count opérations liées à cette catégorie ne seront pas supprimées.',
    'recurring_keep_transactions' => 'La seule opération liée à cette opération périodique ne sera pas supprimée.|Les :count opérations liées à cette opération périodique ne seront pas supprimées.',
    'tag_keep_transactions'       => 'La seule opération liée à ce tag ne sera pas supprimée.|Les :count opérations liées à ce tag ne seront pas supprimées.',
    'check_for_updates'           => 'Vérifier les mises à jour',

    'email'                 => 'Adresse Email',
    'password'              => 'Mot de passe',
    'password_confirmation' => 'Entrer à nouveau le mot de passe',
    'blocked'               => 'Est bloqué ?',
    'blocked_code'          => 'Raison du blocage',
    'login_name'            => 'Identifiant',

    // import
    'apply_rules'           => 'Appliquer les règles',
    'artist'                => 'Artiste',
    'album'                 => 'Album',
    'song'                  => 'Titre',


    // admin
    'domain'                => 'Domaine',
    'single_user_mode'      => 'Désactiver le formulaire d\'inscription',
    'is_demo_site'          => 'Est un site de démonstration',

    // import
    'import_file'           => 'Fichier à importer',
    'configuration_file'    => 'Fichier de configuration',
    'import_file_type'      => 'Type de fichier de configuration',
    'csv_comma'             => 'Une virgule (,)',
    'csv_semicolon'         => 'Un point-virgule (;)',
    'csv_tab'               => 'Une tabulation (invisible)',
    'csv_delimiter'         => 'Délimiteur de champ CSV',
    'csv_import_account'    => 'Compte d’importation par défaut',
    'csv_config'            => 'Configuration d\'importation CSV',
    'client_id'             => 'Identifiant',
    'service_secret'        => 'Secret de service',
    'app_secret'            => 'Secret d\'application',
    'app_id'                => 'ID App',
    'secret'                => 'Secret',
    'public_key'            => 'Clé publique',
    'country_code'          => 'Code pays',
    'provider_code'         => 'Banque ou fournisseur de données',
    'fints_url'             => 'URL de l\'API FinTS',
    'fints_port'            => 'Port',
    'fints_bank_code'       => 'Code banque',
    'fints_username'        => 'Nom d\'utilisateur',
    'fints_password'        => 'Code PIN / Mot de passe',
    'fints_account'         => 'Compte FinTS',
    'local_account'         => 'Compte Firefly III',
    'from_date'             => 'À partir du',
    'to_date'               => 'Jusqu\'au',


    'due_date'                => 'Échéance',
    'payment_date'            => 'Date de paiement',
    'invoice_date'            => 'Date de facturation',
    'internal_reference'      => 'Référence interne',
    'inward'                  => 'Description vers l’intérieur',
    'outward'                 => 'Impact de l\'autre transaction',
    'rule_group_id'           => 'Groupe de règles',
    'transaction_description' => 'Description de la transaction',
    'first_date'              => 'Date de début',
    'transaction_type'        => 'Type de transaction',
    'repeat_until'            => 'Répéter jusqu\'à',
    'recurring_description'   => 'Description de l\'opération périodique',
    'repetition_type'         => 'Type de répétition',
    'foreign_currency_id'     => 'Devise étrangère',
    'repetition_end'          => 'Fin de répétition',
    'repetitions'             => 'Répétitions',
    'calendar'                => 'Calendrier',
    'weekend'                 => 'Week-end',
    'client_secret'           => 'Clé secrète',

    'withdrawal_destination_id' => 'Compte de destination',
    'deposit_source_id'         => 'Compte source',
    'expected_on'               => 'Prévu le',
    'paid'                      => 'Payé',

];
