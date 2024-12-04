<?php

declare(strict_types=1);

return [
    'accepted'             => ':Attribute muss akzeptiert werden.',
    'accepted_if'          => ':Attribute muss akzeptiert werden, wenn :other :value ist.',
    'active_url'           => ':Attribute ist keine gültige Internet-Adresse.',
    'after'                => ':Attribute muss ein Datum nach :date sein.',
    'after_or_equal'       => ':Attribute muss ein Datum nach :date oder gleich :date sein.',
    'alpha'                => ':Attribute darf nur aus Buchstaben bestehen.',
    'alpha_dash'           => ':Attribute darf nur aus Buchstaben, Zahlen, Binde- und Unterstrichen bestehen.',
    'alpha_num'            => ':Attribute darf nur aus Buchstaben und Zahlen bestehen.',
    'array'                => ':Attribute muss ein Array sein.',
    'ascii'                => 'Die :attribute darf nur alphanumerische Single-Byte-Zeichen und -Symbole enthalten.',
    'before'               => ':Attribute muss ein Datum vor :date sein.',
    'before_or_equal'      => ':Attribute muss ein Datum vor :date oder gleich :date sein.',
    'between'              => [
        'array'   => ':Attribute muss zwischen :min & :max Elemente haben.',
        'file'    => ':Attribute muss zwischen :min & :max Kilobytes groß sein.',
        'numeric' => ':Attribute muss zwischen :min & :max liegen.',
        'string'  => ':Attribute muss zwischen :min & :max Zeichen lang sein.',
    ],
    'boolean'              => ':Attribute muss entweder \'true\' oder \'false\' sein.',
    'can'                  => 'Das Feld :attribute enthält einen nicht autorisierten Wert.',
    'confirmed'            => ':Attribute stimmt nicht mit der Bestätigung überein.',
    'contains'             => 'Dem Feld :attribute fehlt ein erforderlicher Wert.',
    'current_password'     => 'Das Passwort ist falsch.',
    'date'                 => ':Attribute muss ein gültiges Datum sein.',
    'date_equals'          => ':Attribute muss ein Datum gleich :date sein.',
    'date_format'          => ':Attribute entspricht nicht dem gültigen Format für :format.',
    'decimal'              => 'Die :attribute muss :decimal Dezimalstellen haben.',
    'declined'             => ':Attribute muss abgelehnt werden.',
    'declined_if'          => ':Attribute muss abgelehnt werden wenn :other :value ist.',
    'different'            => ':Attribute und :other müssen sich unterscheiden.',
    'digits'               => ':Attribute muss :digits Stellen haben.',
    'digits_between'       => ':Attribute muss zwischen :min und :max Stellen haben.',
    'dimensions'           => ':Attribute hat ungültige Bildabmessungen.',
    'distinct'             => ':Attribute beinhaltet einen bereits vorhandenen Wert.',
    'doesnt_end_with'      => ':Attribute darf nicht mit einem der folgenden enden: :values.',
    'doesnt_start_with'    => ':Attribute darf nicht mit einem der folgenden beginnen: :values.',
    'email'                => ':Attribute muss eine gültige E-Mail-Adresse sein.',
    'ends_with'            => ':Attribute muss eine der folgenden Endungen aufweisen: :values',
    'enum'                 => 'Der ausgewählte Wert ist ungültig.',
    'exists'               => 'Der gewählte Wert für :attribute ist ungültig.',
    'extensions'           => 'Das Feld :attribute muss eine der folgenden Erweiterungen haben: :values.',
    'file'                 => ':Attribute muss eine Datei sein.',
    'filled'               => ':Attribute muss ausgefüllt sein.',
    'gt'                   => [
        'array'   => ':Attribute muss mehr als :value Elemente haben.',
        'file'    => ':Attribute muss größer als :value Kilobytes sein.',
        'numeric' => ':Attribute muss größer als :value sein.',
        'string'  => ':Attribute muss länger als :value Zeichen sein.',
    ],
    'gte'                  => [
        'array'   => ':Attribute muss mindestens :value Elemente haben.',
        'file'    => ':Attribute muss größer oder gleich :value Kilobytes sein.',
        'numeric' => ':Attribute muss größer oder gleich :value sein.',
        'string'  => ':Attribute muss mindestens :value Zeichen lang sein.',
    ],
    'hex_color'            => 'Das Feld :attribute muss eine gültige Hexadezimalfarbe sein.',
    'image'                => ':Attribute muss ein Bild sein.',
    'in'                   => 'Der gewählte Wert für :attribute ist ungültig.',
    'in_array'             => 'Der gewählte Wert für :attribute kommt nicht in :other vor.',
    'integer'              => ':Attribute muss eine ganze Zahl sein.',
    'ip'                   => ':Attribute muss eine gültige IP-Adresse sein.',
    'ipv4'                 => ':Attribute muss eine gültige IPv4-Adresse sein.',
    'ipv6'                 => ':Attribute muss eine gültige IPv6-Adresse sein.',
    'json'                 => ':Attribute muss ein gültiger JSON-String sein.',
    'list'                 => ':Attribute muss eine Liste sein.',
    'lowercase'            => ':Attribute muss in Kleinbuchstaben sein.',
    'lt'                   => [
        'array'   => ':Attribute muss weniger als :value Elemente haben.',
        'file'    => ':Attribute muss kleiner als :value Kilobytes sein.',
        'numeric' => ':Attribute muss kleiner als :value sein.',
        'string'  => ':Attribute muss kürzer als :value Zeichen sein.',
    ],
    'lte'                  => [
        'array'   => ':Attribute darf maximal :value Elemente haben.',
        'file'    => ':Attribute muss kleiner oder gleich :value Kilobytes sein.',
        'numeric' => ':Attribute muss kleiner oder gleich :value sein.',
        'string'  => ':Attribute darf maximal :value Zeichen lang sein.',
    ],
    'mac_address'          => 'Der Wert muss eine gültige MAC-Adresse sein.',
    'max'                  => [
        'array'   => ':Attribute darf maximal :max Elemente haben.',
        'file'    => ':Attribute darf maximal :max Kilobytes groß sein.',
        'numeric' => ':Attribute darf maximal :max sein.',
        'string'  => ':Attribute darf maximal :max Zeichen haben.',
    ],
    'max_digits'           => ':Attribute darf maximal :max Ziffern lang sein.',
    'mimes'                => ':Attribute muss den Dateityp :values haben.',
    'mimetypes'            => ':Attribute muss den Dateityp :values haben.',
    'min'                  => [
        'array'   => ':Attribute muss mindestens :min Elemente haben.',
        'file'    => ':Attribute muss mindestens :min Kilobytes groß sein.',
        'numeric' => ':Attribute muss mindestens :min sein.',
        'string'  => ':Attribute muss mindestens :min Zeichen lang sein.',
    ],
    'min_digits'           => ':Attribute muss mindestens :min Ziffern lang sein.',
    'missing'              => 'Das Feld :attribute muss fehlen.',
    'missing_if'           => 'Das Feld :attribute muss fehlen, wenn :other gleich :value ist.',
    'missing_unless'       => 'Das Feld :attribute muss fehlen, es sei denn, :other ist :value.',
    'missing_with'         => 'Das Feld :attribute muss fehlen, wenn :values vorhanden ist.',
    'missing_with_all'     => 'Das Feld :attribute muss fehlen, wenn :values vorhanden sind.',
    'multiple_of'          => ':Attribute muss ein Vielfaches von :value sein.',
    'not_in'               => 'Der gewählte Wert für :attribute ist ungültig.',
    'not_regex'            => ':Attribute hat ein ungültiges Format.',
    'numeric'              => ':Attribute muss eine Zahl sein.',
    'password'             => [
        'letters'       => ':Attribute muss mindestens einen Buchstaben beinhalten.',
        'mixed'         => ':Attribute muss mindestens einen Großbuchstaben und einen Kleinbuchstaben beinhalten.',
        'numbers'       => ':Attribute muss mindestens eine Zahl beinhalten.',
        'symbols'       => ':Attribute muss mindestens ein Sonderzeichen beinhalten.',
        'uncompromised' => ':Attribute wurde in einem Datenleck gefunden. Bitte wählen Sie ein anderes :attribute.',
    ],
    'present'              => ':Attribute muss vorhanden sein.',
    'present_if'           => 'Das Feld :attribute muss vorhanden sein, wenn :other gleich :value ist.',
    'present_unless'       => 'Das Feld :attribute muss vorhanden sein, es sei denn, :other ist :value.',
    'present_with'         => 'Das Feld :attribute muss vorhanden sein, wenn :values vorhanden ist.',
    'present_with_all'     => 'Das Feld :attribute muss vorhanden sein, wenn :values vorhanden sind.',
    'prohibited'           => ':Attribute ist unzulässig.',
    'prohibited_if'        => ':Attribute ist unzulässig, wenn :other :value ist.',
    'prohibited_unless'    => ':Attribute ist unzulässig, wenn :other nicht :values ist.',
    'prohibits'            => ':Attribute verbietet die Angabe von :other.',
    'regex'                => ':Attribute Format ist ungültig.',
    'required'             => ':Attribute muss ausgefüllt werden.',
    'required_array_keys'  => 'Dieses Feld muss Einträge enthalten für: :values.',
    'required_if'          => ':Attribute muss ausgefüllt werden, wenn :other den Wert :value hat.',
    'required_if_accepted' => ':Attribute muss ausgefüllt werden, wenn :other gewählt ist.',
    'required_if_declined' => 'Das Feld :attribute ist erforderlich, wenn :other abgelehnt wird.',
    'required_unless'      => ':Attribute muss ausgefüllt werden, wenn :other nicht den Wert :values hat.',
    'required_with'        => ':Attribute muss ausgefüllt werden, wenn :values ausgefüllt wurde.',
    'required_with_all'    => ':Attribute muss ausgefüllt werden, wenn :values ausgefüllt wurde.',
    'required_without'     => ':Attribute muss ausgefüllt werden, wenn :values nicht ausgefüllt wurde.',
    'required_without_all' => ':Attribute muss ausgefüllt werden, wenn keines der Felder :values ausgefüllt wurde.',
    'same'                 => ':Attribute und :other müssen übereinstimmen.',
    'size'                 => [
        'array'   => ':Attribute muss genau :size Elemente haben.',
        'file'    => ':Attribute muss :size Kilobyte groß sein.',
        'numeric' => ':Attribute muss gleich :size sein.',
        'string'  => ':Attribute muss :size Zeichen lang sein.',
    ],
    'starts_with'          => ':Attribute muss mit einem der folgenden Anfänge aufweisen: :values',
    'string'               => ':Attribute muss ein String sein.',
    'timezone'             => ':Attribute muss eine gültige Zeitzone sein.',
    'ulid'                 => 'Die :attribute muss eine gültige ULID sein.',
    'unique'               => ':Attribute ist bereits vergeben.',
    'uploaded'             => ':Attribute konnte nicht hochgeladen werden.',
    'uppercase'            => ':Attribute muss in Großbuchstaben sein.',
    'url'                  => ':Attribute muss eine URL sein.',
    'uuid'                 => ':Attribute muss ein UUID sein.',
    'attributes'           => [
        'address'                  => 'Adresse',
        'affiliate_url'            => 'Affiliate-URL',
        'age'                      => 'Alter',
        'amount'                   => 'Höhe',
        'announcement'             => 'Bekanntmachung',
        'area'                     => 'Gebiet',
        'audience_prize'           => 'Publikumspreis',
        'audience_winner'          => 'audience winner',
        'available'                => 'Verfügbar',
        'birthday'                 => 'Geburtstag',
        'body'                     => 'Körper',
        'city'                     => 'Stadt',
        'company'                  => 'company',
        'compilation'              => 'Zusammenstellung',
        'concept'                  => 'Konzept',
        'conditions'               => 'Bedingungen',
        'content'                  => 'Inhalt',
        'contest'                  => 'contest',
        'country'                  => 'Land',
        'cover'                    => 'Abdeckung',
        'created_at'               => 'Erstellt am',
        'creator'                  => 'Ersteller',
        'currency'                 => 'Währung',
        'current_password'         => 'Derzeitiges Passwort',
        'customer'                 => 'Kunde',
        'date'                     => 'Datum',
        'date_of_birth'            => 'Geburtsdatum',
        'dates'                    => 'Termine',
        'day'                      => 'Tag',
        'deleted_at'               => 'Gelöscht am',
        'description'              => 'Beschreibung',
        'display_type'             => 'Anzeigetyp',
        'district'                 => 'Bezirk',
        'duration'                 => 'Dauer',
        'email'                    => 'E-Mail-Adresse',
        'excerpt'                  => 'Auszug',
        'filter'                   => 'Filter',
        'finished_at'              => 'fertig um',
        'first_name'               => 'Vorname',
        'gender'                   => 'Geschlecht',
        'grand_prize'              => 'Hauptpreis',
        'group'                    => 'Gruppe',
        'hour'                     => 'Stunde',
        'image'                    => 'Bild',
        'image_desktop'            => 'Desktop-Bild',
        'image_main'               => 'Hauptbild',
        'image_mobile'             => 'mobiles Bild',
        'images'                   => 'Bilder',
        'is_audience_winner'       => 'ist Publikumssieger',
        'is_hidden'                => 'ist versteckt',
        'is_subscribed'            => 'ist abonniert',
        'is_visible'               => 'ist sichtbar',
        'is_winner'                => 'ist Gewinner',
        'items'                    => 'Artikel',
        'key'                      => 'Schlüssel',
        'last_name'                => 'Nachname',
        'lesson'                   => 'Lektion',
        'line_address_1'           => 'Adresszeile 1',
        'line_address_2'           => 'Adresszeile 2',
        'login'                    => 'Anmeldung',
        'message'                  => 'Nachricht',
        'middle_name'              => 'Zweitname',
        'minute'                   => 'Minute',
        'mobile'                   => 'Handynummer',
        'month'                    => 'Monat',
        'name'                     => 'Name',
        'national_code'            => 'Länderkennung',
        'number'                   => 'Nummer',
        'password'                 => 'Passwort',
        'password_confirmation'    => 'Passwortbestätigung',
        'phone'                    => 'Telefonnummer',
        'photo'                    => 'Foto',
        'portfolio'                => 'Portfolio',
        'postal_code'              => 'Postleitzahl',
        'preview'                  => 'Vorschau',
        'price'                    => 'Preis',
        'product_id'               => 'Produkt ID',
        'product_uid'              => 'Produkt-UID',
        'product_uuid'             => 'Produkt-UUID',
        'promo_code'               => 'Aktionscode',
        'province'                 => 'Provinz',
        'quantity'                 => 'Menge',
        'reason'                   => 'Grund',
        'recaptcha_response_field' => 'Captcha-Feld',
        'referee'                  => 'Schiedsrichter',
        'referees'                 => 'Schiedsrichter',
        'reject_reason'            => 'Ablehnungsgrund',
        'remember'                 => 'Erinnern',
        'restored_at'              => 'Wiederhergestellt am',
        'result_text_under_image'  => 'Ergebnistext unter Bild',
        'role'                     => 'Rolle',
        'rule'                     => 'Regel',
        'rules'                    => 'Regeln',
        'second'                   => 'Sekunde',
        'sex'                      => 'Geschlecht',
        'shipment'                 => 'Sendung',
        'short_text'               => 'Kurzer Text',
        'size'                     => 'Größe',
        'skills'                   => 'Fähigkeiten',
        'slug'                     => 'Schnecke',
        'specialization'           => 'Spezialisierung',
        'started_at'               => 'fing an bei',
        'state'                    => 'Bundesland',
        'status'                   => 'Status',
        'street'                   => 'Straße',
        'student'                  => 'Schüler/Student',
        'subject'                  => 'Gegenstand',
        'tag'                      => 'Etikett',
        'tags'                     => 'Stichworte',
        'teacher'                  => 'Lehrer',
        'terms'                    => 'Bedingungen',
        'test_description'         => 'Test Beschreibung',
        'test_locale'              => 'Test Region',
        'test_name'                => 'Testname',
        'text'                     => 'Text',
        'time'                     => 'Uhrzeit',
        'title'                    => 'Titel',
        'type'                     => 'Typ',
        'updated_at'               => 'Aktualisiert am',
        'user'                     => 'Benutzer',
        'username'                 => 'Benutzername',
        'value'                    => 'Wert',
        'winner'                   => 'winner',
        'work'                     => 'work',
        'year'                     => 'Jahr',
    ],
];