<?php

/**
 * validation.php
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
    'iban'                           => 'Detta är inte ett giltigt IBAN.',
    'zero_or_more'                   => 'Värdet får inte vara negativt.',
    'date_or_time'                   => 'Värdet måste vara ett giltigt datum eller tid (ISO 8601).',
    'source_equals_destination'      => 'Källkontot motsvarar mottagarkontot.',
    'unique_account_number_for_user' => 'Det ser ut som att detta kontonummer redan används.',
    'unique_iban_for_user'           => 'Det ser ut som att detta IBAN redan används.',
    'deleted_user'                   => 'På grund av säkerhetsbegränsningar går det inte att registrera sig med denna e-postadress.',
    'rule_trigger_value'             => 'Detta värde är ogiltigt för vald trigger.',
    'rule_action_value'              => 'Detta värde är ogiltigt för den valda åtgärden.',
    'file_already_attached'          => 'Den uppladdade filen ”:name” är redan kopplad till detta objekt.',
    'file_attached'                  => 'Filen ”:name” har laddats upp.',
    'must_exist'                     => 'ID i fältet :attribute finns inte i databasen.',
    'all_accounts_equal'             => 'Alla konton i detta fält måste vara lika.',
    'group_title_mandatory'          => 'En grupptitel är obligatorisk vid mer än en transaktion.',
    'transaction_types_equal'        => 'All delade transaktioner måste vara av samma typ.',
    'invalid_transaction_type'       => 'Ogiltig transaktionstyp.',
    'invalid_selection'              => 'Ditt val är ogiltigt.',
    'belongs_user'                   => 'Detta värde är ogiltigt för det här fältet.',
    'at_least_one_transaction'       => 'Krävs minst en transaktion.',
    'at_least_one_repetition'        => 'Krävs minst en upprepning.',
    'require_repeat_until'           => 'Kräver ett antal repetitioner eller ett slutdatum (repeat_until). Inte båda.',
    'require_currency_info'          => 'Innehållet i det här fältet är ogiltigt utan valutainformation.',
    'not_transfer_account'           => 'Detta är inte ett konto som kan användas för transaktioner.',
    'require_currency_amount'        => 'Innehållet i det här fältet är ogiltigt utan utländskt belopp.',
    'equal_description'              => 'Transaktions beskrivning bör inte vara samma som den globala beskrivningen.',
    'file_invalid_mime'              => 'Filen ”:name” är av typ ”:mime” som inte accepteras som en ny uppladdning.',
    'file_too_large'                 => 'Filen ”:name” är för stor.',
    'belongs_to_user'                => 'Värdet av :attribute är okänt.',
    'accepted'                       => ':attribute måste godkännas.',
    'bic'                            => 'Detta är inte en giltig BIC.',
    'at_least_one_trigger'           => 'Regeln måste ha minst en utlösare.',
    'at_least_one_action'            => 'Regel måste ha minst en åtgärd.',
    'base64'                         => 'Detta är inte giltigt bas64 data.',
    'model_id_invalid'               => 'Angivet ID verkar ogiltig för denna modell.',
    'more'                           => ':attribute must be larger than ":more".',
    'less'                           => ':attribute måste vara mindre än 10 000 000',
    'active_url'                     => ':attribute är inte en giltig URL.',
    'after'                          => ':attribute måste vara ett datum efter :date.',
    'alpha'                          => ':attribute får enbart innehålla bokstäver.',
    'alpha_dash'                     => ':attribute får endast innehålla bokstäver, siffror och bindestreck.',
    'alpha_num'                      => ':attribute får endast innehålla bokstäver och siffror.',
    'array'                          => ':attribute måste vara en array.',
    'unique_for_user'                => 'Det finns redan en post med detta :attribute.',
    'before'                         => ':attribute måste vara ett datum före :date.',
    'unique_object_for_user'         => 'Namnet är redan upptaget.',
    'unique_account_for_user'        => 'Kontonamnet är redan upptaget.',
    'between.numeric'                => ':attribute måste vara mellan :min och :max.',
    'between.file'                   => ':attribute måste vara mellan :min och :max kilobytes.',
    'between.string'                 => ':attribute måste vara mellan :min och :max tecken.',
    'between.array'                  => ':attribute måste innehålla :min till :max artiklar.',
    'boolean'                        => ':attribute fältet måste vara sant eller falskt.',
    'confirmed'                      => ':attribute bekräftelsen matchar inte.',
    'date'                           => ':attribute är inte ett giltigt datum.',
    'date_format'                    => ':attribute matchar inte formatet :format.',
    'different'                      => ':attribute och :other måste vara olika.',
    'digits'                         => ':attribute måste vara :digits siffror.',
    'digits_between'                 => ':attribute måste innehålla :min till :max siffror.',
    'email'                          => ':attribute måste vara en giltig e-postadress.',
    'filled'                         => ':attribute fältet är obligatoriskt.',
    'exists'                         => 'Det valda :attribute är ogiltigt.',
    'image'                          => ':attribute måste vara en bild.',
    'in'                             => 'Det valda :attribute är ogitligt.',
    'integer'                        => ':attribute måste vara ett heltal.',
    'ip'                             => ':attribute måste vara en giltig IP-adress.',
    'json'                           => ':attribute måste vara en giltig JSON sträng.',
    'max.numeric'                    => ':attribute får inte vara större än :max.',
    'max.file'                       => ':attribute får inte vara större än :max kilobytes.',
    'max.string'                     => ':attribute får inte vara större än :max tecken.',
    'max.array'                      => ':attribute får inte innehålla fler artiklar än :max.',
    'mimes'                          => ':attribute måste vara av filtypen :values.',
    'min.numeric'                    => ':attribute måste vara minst :min.',
    'lte.numeric'                    => ':attribute måste vara mindre än eller lika med :value.',
    'min.file'                       => ':attribute måste vara minst :min kilobytes.',
    'min.string'                     => ':attribute måste minst vara :min tecken.',
    'min.array'                      => ':attribute måste innehålla minst :min artiklar.',
    'not_in'                         => 'Det valda :attribute är ogiltigt.',
    'numeric'                        => ':attribute måste vara ett nummer.',
    'numeric_native'                 => 'Ursprungsvärdet måste vara ett nummer.',
    'numeric_destination'            => 'Mottagarkontot måste vara ett nummer.',
    'numeric_source'                 => 'Källvärdet måste vara ett nummer.',
    'regex'                          => ':attribute format är ogiltigt.',
    'required'                       => ':attribute fältet är obligatoriskt.',
    'required_if'                    => ':attribute fältet är obligatoriskt när :other är :value.',
    'required_unless'                => ':attribute fältet är obligatoriskt så vida inte :other är i :values.',
    'required_with'                  => ':attribute fältet är obligatoriskt när :values är synligt.',
    'required_with_all'              => ':attribute fältet är obligatoriskt när :values är synligt.',
    'required_without'               => ':attribute fältet är obligatoriskt när :values inte är synligt.',
    'required_without_all'           => ':attribute fältet är obligatoriskt när ingen av :values är synligt.',
    'same'                           => ':attribute och :other måste matcha.',
    'size.numeric'                   => ':attribute måste vara :size.',
    'amount_min_over_max'            => 'Det minimala värdet kan inte vara större än det maximala värdet.',
    'size.file'                      => ':attribute måste vara :size kilobytes.',
    'size.string'                    => ':attribute måste vara :size tecken.',
    'size.array'                     => ':attribute måste innehålla :size artiklar.',
    'unique'                         => ':attribute är redan upptaget.',
    'string'                         => ':attribute måste vara en sträng.',
    'url'                            => ':attribute formatet är ogiltigt.',
    'timezone'                       => ':attribute måste vara en giltig zon.',
    '2fa_code'                       => ':attribute fältet är ogiltigt.',
    'dimensions'                     => ':attribute har ogiltiga bilddimensioner.',
    'distinct'                       => ':attribute fältet har ett dubbelt värde.',
    'file'                           => ':attribute måste vara en fil.',
    'in_array'                       => ':attribute fältet existerar inte i :other.',
    'present'                        => ':attribute fältet måste vara synligt.',
    'amount_zero'                    => 'Totala värdet kan inte vara noll.',
    'current_target_amount'          => 'Det nuvarande beloppet måste vara mindre än målbeloppet.',
    'unique_piggy_bank_for_user'     => 'Namnet på spargrisen måste vara unikt.',
    'secure_password'                => 'Detta lösenord är inte säkert. Vänligen försök igen. För mer info se https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'      => 'Ogiltig repetitionstyp får återkommande transaktioner.',
    'valid_recurrence_rep_moment'    => 'Ogiltig repetitionsmoment för denna typ av repetition.',
    'invalid_account_info'           => 'Ogiltig kontoinformation.',
    'attributes'                     => [
        'email'                   => 'e-postadress',
        'description'             => 'beskrivning',
        'amount'                  => 'belopp',
        'name'                    => 'namn',
        'piggy_bank_id'           => 'spargris ID',
        'targetamount'            => 'mål belopp',
        'opening_balance_date'    => 'ingående balans datum',
        'opening_balance'         => 'ingående balans',
        'match'                   => 'träff',
        'amount_min'              => 'minsta belopp',
        'amount_max'              => 'högsta belopp',
        'title'                   => 'titel',
        'tag'                     => 'etikett',
        'transaction_description' => 'transaktionsbeskrivning',
        'rule-action-value.1'     => 'regelåtgärd värde #1',
        'rule-action-value.2'     => 'regelåtgärd värde #2',
        'rule-action-value.3'     => 'regelåtgärd värde #3',
        'rule-action-value.4'     => 'regelåtgärd värde #4',
        'rule-action-value.5'     => 'regelåtgärd värde #5',
        'rule-action.1'           => 'regelåtgärd #1',
        'rule-action.2'           => 'regelåtgärd #2',
        'rule-action.3'           => 'regelåtgärd #3',
        'rule-action.4'           => 'regelåtgärd #4',
        'rule-action.5'           => 'regelåtgärd #5',
        'rule-trigger-value.1'    => 'regel utlösare värde #1',
        'rule-trigger-value.2'    => 'regel utlösare värde #2',
        'rule-trigger-value.3'    => 'regel utlösare värde #3',
        'rule-trigger-value.4'    => 'regel utlösare värde #4',
        'rule-trigger-value.5'    => 'regel trigger värde #regel utlösare värde #5',
        'rule-trigger.1'          => 'regel utlösare #1',
        'rule-trigger.2'          => 'regel utlösare #2',
        'rule-trigger.3'          => 'regel utlösare #3',
        'rule-trigger.4'          => 'regel utlösare #4',
        'rule-trigger.5'          => 'regel utlösare #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data'    => 'Ett giltigt källkonto-ID och/eller ett giltigt källkontonamn behövs för att gå vidare.',
    'withdrawal_source_bad_data'     => 'Det gick inte att hitta ett giltigt källkonto med ID ":id" eller namn ":name".',
    'withdrawal_dest_need_data'      => 'Ett giltigt destinationskonto-ID och/eller giltigt mottagarkontonamn behövs för att gå vidare.',
    'withdrawal_dest_bad_data'       => 'Det gick inte att hitta ett giltigt mottagarkonto med ID ":id" eller namn ":name".',

    'deposit_source_need_data' => 'Ett giltigt källkonto-ID och/eller ett giltigt källkontonamn behövs för att gå vidare.',
    'deposit_source_bad_data'  => 'Det gick inte att hitta ett giltigt källkonto med ID ":id" eller namn ":name".',
    'deposit_dest_need_data'   => 'Ett giltigt destinationskonto-ID och/eller giltigt mottagarkontonamn behövs för att gå vidare.',
    'deposit_dest_bad_data'    => 'Det gick inte att hitta ett giltigt mottagarkonto med ID ":id" eller namn ":name".',
    'deposit_dest_wrong_type'  => 'Det inskickade destinationskontot är inte av rätt typ.',

    'transfer_source_need_data' => 'Ett giltigt källkonto-ID och/eller ett giltigt källkontonamn behövs för att gå vidare.',
    'transfer_source_bad_data'  => 'Det gick inte att hitta ett giltigt källkonto med ID ":id" eller namn ":name".',
    'transfer_dest_need_data'   => 'Ett giltigt destinationskonto-ID och/eller giltigt mottagarkontonamn behövs för att gå vidare.',
    'transfer_dest_bad_data'    => 'Det gick inte att hitta ett giltigt mottagarkonto med ID ":id" eller namn ":name".',
    'need_id_in_edit'           => 'Varje delad transaktion kräver transaction_journal_id (giltigt ID eller 0).',

    'ob_source_need_data' => 'Ett giltigt källkonto-ID och/eller ett giltigt källkontonamn behövs för att gå vidare.',
    'ob_dest_need_data'   => 'Ett giltigt destinationskonto-ID och/eller giltigt mottagarkontonamn behövs för att gå vidare.',
    'ob_dest_bad_data'    => 'Det gick inte att hitta ett giltigt mottagarkonto med ID ":id" eller namn ":name".',

    'generic_invalid_source'      => 'Det går inte att använda detta konto som källkonto.',
    'generic_invalid_destination' => 'Det går inte att använda detta konto som mottagarkonto.',

    'gte.numeric' => 'The :attribute must be greater than or equal to :value.',
    'gte.file'    => 'The :attribute must be greater than or equal to :value kilobytes.',
    'gte.string'  => 'The :attribute must be greater than or equal to :value characters.',
    'gte.array'   => 'The :attribute must have :value items or more.',
];
