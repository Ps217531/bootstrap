<?php
    /*
    |--------------------------------------------------------------------------
    | 5 Steps to Contribute a New Twill Localization at Ease
    |--------------------------------------------------------------------------
    | 1. Find the "lang.csv" under "lang" directory.
    | 2. Import the csv file into a blank Google Sheet.
    | 3. Each column is a language, enter the translation for a column. (tips: feel free to freeze rows and columns).
    | 4. Download the Google Sheet as CSV, replace the original "lang/lang.csv" with the new one.
    | 5. Run the command "php artisan twill:lang" to sync all lang files.
    */


return [
    'auth' => [
        'back-to-login' => 'Zurück zum Login',
        'choose-password' => 'Passwort wählen',
        'email' => 'E-Mail',
        'forgot-password' => 'Passwort vergessen',
        'login' => 'Anmelden',
        'login-title' => 'Anmelden',
        'oauth-link-title' => 'Geben Sie Ihr Passwort erneut ein, um ihr Konto mit :provider zu verknüpfen',
        'otp' => 'Einmal-Passwort',
        'password' => 'Passwort',
        'password-confirmation' => 'Passwort bestätigen',
        'reset-password' => 'Passwort zurücksetzen',
        'reset-send' => 'Link zum Zurücksetzen des Passworts senden',
        'verify-login' => 'Anmeldung bestätigen',
    ],
    'buckets' => [
        'intro' => 'Was würden Sie heute gerne vorstellen?',
        'none-available' => 'Keine Einträge vorhanden.',
        'none-featured' => 'Keine hervorgehobenen Einträge.',
        'publish' => 'Veröffentlichen',
        'source-title' => 'Verfügbare Einträge',
    ],
    'dashboard' => [
        'all-activity' => 'Alle Aktivitäten',
        'create-new' => 'Neu erstellen',
        'empty-message' => 'Sie haben noch keine Aktivitäten.',
        'my-activity' => 'Meine Aktivitäten',
        'my-drafts' => 'Meine Entwürfe',
        'search-placeholder' => 'Alle Inhalte durchsuchen...',
        'statitics' => 'Statistiken',
        'search' => [
            'loading' => 'Lade…',
            'no-result' => 'Keine Ergebnisse gefunden.',
            'last-edit' => 'Bearbeitet',
        ],
        'activities' => [
            'created' => 'Erstellt',
            'updated' => 'Aktualisiert',
            'unpublished' => 'Veröffentlichung aufgehoben',
            'published' => 'Veröffentlicht',
            'featured' => 'Hervorgehoben',
            'unfeatured' => 'Hervorhebung aufgehoben',
            'restored' => 'Wiederhergestellt',
            'deleted' => 'Gelöscht',
        ],
        'activity-row' => [
            'edit' => 'Bearbeiten',
            'view-permalink' => 'Permalink zeigen',
            'by' => 'durch',
        ],
        'unknown-author' => 'Unbekannt',
    ],
    'dialog' => [
        'cancel' => 'Abbrechen',
        'ok' => 'OK',
        'title' => 'In den Papierkorb verschieben',
    ],
    'editor' => [
        'cancel' => 'Abbrechen',
        'delete' => 'Löschen',
        'done' => 'Fertig',
        'title' => 'Editor',
    ],
    'emails' => [
        'all-rights-reserved' => 'Alle Rechte vorbehalten.',
        'hello' => 'Hallo.',
        'problems' => 'Wenn Sie Probleme damit haben, die Schaltfläche ":actionText" zu klicken, kopieren Sie die folgende URL und fügen Sie sie in die Adresszeile Ihres Browsers ein: [:url](:url)',
        'regards' => 'Mit freundlichen Grüßen,',
    ],
    'fields' => [
        'block-editor' => [
            'add-content' => 'Inhalt hinzufügen',
            'collapse-all' => 'Alle einklappen',
            'create-another' => 'Weiteren erstellen',
            'delete' => 'Löschen',
            'expand-all' => 'Alle ausklappen',
            'loading' => 'Lade',
            'open-in-editor' => 'In Editor öffnen',
            'preview' => 'Vorschau',
            'add-item' => 'Neu hinzufügen',
        ],
        'browser' => [
            'add-label' => 'Hinzufügen',
            'attach' => 'Anhängen',
        ],
        'files' => [
            'add-label' => 'Hinzufügen',
        ],
        'generic' => [
            'switch-language' => 'Sprache wechseln',
        ],
        'map' => [
            'hide' => 'Karte&nbsp;ausblenden',
            'show' => 'Karte&nbsp;anzeigen',
        ],
        'medias' => [
            'btn-label' => 'Hinzufügen',
            'crop' => 'Ausschnitt',
            'crop-edit' => 'Ausschnitt bearbeiten',
            'crop-list' => 'Ausschnitt',
            'crop-save' => 'Übernehmen',
            'delete' => 'Löschen',
            'download' => 'Herunterladen',
            'edit-close' => 'Schließen',
            'edit-info' => 'Info bearbeiten',
            'original-dimensions' => 'Original',
            'alt-text' => 'Alternativtext',
            'caption' => 'Bildunterschrift',
            'video-url' => 'Video-URL (optional)',
        ],
    ],
    'filter' => [
        'apply-btn' => 'Anwenden',
        'clear-btn' => 'Zurücksetzen',
        'search-placeholder' => 'Suchen',
        'toggle-label' => 'Filter',
    ],
    'footer' => [
        'version' => 'Version',
    ],
    'form' => [
        'content' => 'Inhalt',
        'dialogs' => [
            'delete' => [
                'confirm' => 'Löschen',
                'confirmation' => 'Sind Sie sicher?<br />Die Aktion kann nicht rückgängig gemacht werden.',
                'delete-content' => 'Inhalt löschen',
                'title' => 'Inhalt löschen',
            ],
        ],
        'editor' => 'Editor',
    ],
    'lang-manager' => [
        'published' => 'Veröffentlicht',
    ],
    'lang-switcher' => [
        'edit-in' => 'Bearbeiten auf',
    ],
    'listing' => [
        'add-new-button' => 'Neu erstellen',
        'bulk-actions' => 'Aktion auf alle anwenden',
        'bulk-clear' => 'Abbrechen',
        'columns' => [
            'featured' => 'Hervorgehoben',
            'name' => 'Name',
            'published' => 'Veröffentlicht',
            'show' => 'Anzeigen',
            'thumbnail' => 'Vorschaubild',
        ],
        'dialogs' => [
            'delete' => [
                'confirm' => 'Löschen',
                'disclaimer' => 'Der Eintrag wird nicht gelöscht, sondern in den Papierkorb verschoben.',
                'move-to-trash' => 'In den Papierkorb verschieben',
                'title' => 'Eintrag löschen',
            ],
            'destroy' => [
                'confirm' => 'Vernichten',
                'destroy-permanently' => 'Dauerhaft vernichten',
                'disclaimer' => 'Der Eintrag ist danach nicht mehr wiederherstellbar.',
                'title' => 'Eintrag vernichten',
            ],
        ],
        'dropdown' => [
            'delete' => 'Löschen',
            'destroy' => 'Vernichten',
            'duplicate' => 'Duplizieren',
            'edit' => 'Bearbeiten',
            'publish' => 'Veröffentlichen',
            'feature' => 'Hervorheben',
            'restore' => 'Wiederherstellen',
            'unfeature' => 'Hervorhebung aufheben',
            'unpublish' => 'Veröffentlichung aufheben',
        ],
        'filter' => [
            'all-items' => 'Alle',
            'draft' => 'Entwürfe',
            'mine' => 'Meine',
            'published' => 'Veröffentlicht',
            'trash' => 'Papierkorb',
        ],
        'languages' => 'Sprachen',
        'listing-empty-message' => 'Noch keine Einträge vorhanden.',
        'paginate' => [
            'rows-per-page' => 'Einträge pro Seite:',
        ],
        'bulk-selected-item' => 'Eintrag ausgewählt',
        'bulk-selected-items' => 'Einträge ausgewählt',
        'reorder' => [
            'success' => 'Reihenfolge aktualisiert',
            'error' => 'Etwas ist schief gelaufen: Reihenfolge konnte nicht aktualisiert werden.',
        ],
        'restore' => [
            'success' => 'Eintrag wiederhergestellt',
            'error' => 'Etwas ist schief gelaufen: Eintrag konnte nicht wiederhergestellt werden.',
        ],
        'bulk-restore' => [
            'success' => 'Einträge wiederhergestellt',
            'error' => 'Etwas ist schief gelaufen: Einträge konnten nicht wiederhergestellt werden.',
        ],
        'force-delete' => [
            'success' => 'Eintrag vernichtet',
            'error' => 'Etwas ist schief gelaufen: Eintrag konnte nicht vernichtet werden.',
        ],
        'bulk-force-delete' => [
            'success' => 'Einträge vernichtet',
            'error' => 'Etwas ist schief gelaufen: Einträge konnten nicht vernichtet werden.',
        ],
        'delete' => [
            'success' => 'Eintrag in den Papierkorb verschoben',
            'error' => 'Etwas ist schief gelaufen: Eintrag konnte nicht in den Papierkorb verschoben werden.',
        ],
        'bulk-delete' => [
            'success' => 'Einträge in den Papierkorb verschoben',
            'error' => 'Etwas ist schief gelaufen: Einträge konnten nicht in den Papierkorb verschoben werden.',
        ],
        'duplicate' => [
            'success' => 'Eintrag erfolgreich dupliziert',
            'error' => 'Etwas ist schief gelaufen: Eintrag konnte nicht dupliziert werden.',
        ],
        'publish' => [
            'unpublished' => 'Veröffentlichung des Eintrags aufgehoben',
            'published' => 'Eintrag veröffentlicht',
            'error' => 'Etwas ist schief gelaufen: Eintrag konnte nicht veröffentlicht werden.',
        ],
        'featured' => [
            'unfeatured' => 'Hervorhebung des Eintrags aufgehoben',
            'featured' => 'Eintrag hervorgehoben',
            'error' => 'Etwas ist schief gelaufen: Eintrag konnte nicht hervorgehoben werden.',
        ],
        'bulk-featured' => [
            'unfeatured' => 'Hervorhebung der Einträge aufgehoben',
            'featured' => 'Einträge hervorgehoben',
            'error' => 'Etwas ist schief gelaufen: Einträge konnten nicht hervorgehoben werden.',
        ],
        'bulk-publish' => [
            'unpublished' => 'Veröffentlichung der Einträge aufgehoben',
            'published' => 'Einträge veröffentlicht',
            'error' => 'Etwas ist schief gelaufen: Einträge konnten nicht veröffentlicht werden.',
        ],
    ],
    'main' => [
        'create' => 'Erstellen',
        'draft' => 'Entwurf',
        'published' => 'Veröffentlicht',
        'title' => 'Titel',
        'update' => 'Aktualisieren',
    ],
    'media-library' => [
        'files' => 'Dateien',
        'filter-select-label' => 'Nach Tags filtern',
        'images' => 'Bilder',
        'insert' => 'Einfügen:',
        'sidebar' => [
            'alt-text' => 'Alternativtext',
            'caption' => 'Bildunterschrift',
            'clear' => 'Zurücksetzen',
            'dimensions' => 'Format',
            'empty-text' => 'Keine Datei ausgewählt',
            'files-selected' => 'Dateien ausgewählt',
            'tags' => 'Tags',
        ],
        'title' => 'Medien',
        'update' => 'Aktualisieren:',
        'unused-filter-label' => 'Nur ungenutzte anzeigen',
        'no-tags-found' => 'Leider keine Tags gefunden.',
        'dialogs' => [
            'delete' => [
                'delete-media-title' => 'Medien löschen',
                'delete-media-desc' => 'Sind Sie sicher?<br />Die Aktion kann nicht rückgängig gemacht werden.',
                'delete-media-confirm' => 'Löschen',
                'title' => 'Sind Sie sicher?',
                'allow-delete-multiple-medias' => 'Einige Dateien werden verwendet und können nicht gelöscht werden. Möchten Sie die anderen löschen?',
                'allow-delete-one-media' => 'Diese Datei wird verwendet und kann nicht gelöscht werden. Möchten Sie die anderen löschen?',
                'dont-allow-delete-multiple-medias' => 'Diese Dateien werden verwendet und können nicht gelöscht werden.',
                'dont-allow-delete-one-media' => 'Diese Datei wird verwendet und kann nicht gelöscht werden.',
            ],
            'replace' => [
                'replace-media-title' => 'Medien ersetzen',
                'replace-media-desc' => 'Sind Sie sicher?<br />Die Aktion kann nicht rückgängig gemacht werden.',
                'replace-media-confirm' => 'Ersetzen',
            ],
        ],
        'types' => [
            'single' => [
                'image' => 'Bild',
                'video' => 'Video',
                'file' => 'Datei',
            ],
            'multiple' => [
                'image' => 'Bilder',
                'video' => 'Video',
                'file' => 'Dateien',
            ],
        ],
    ],
    'modal' => [
        'create' => [
            'button' => 'Erstellen',
            'create-another' => 'Erstellen und weiteren Eintrag hinzufügen',
            'title' => 'Neu erstellen',
        ],
        'permalink-field' => 'Permalink',
        'title-field' => 'Titel',
        'update' => [
            'button' => 'Aktualisieren',
            'title' => 'Aktualisieren',
        ],
        'done' => [
            'button' => 'Fertig',
        ],
    ],
    'nav' => [
        'admin' => 'Admin',
        'cms-users' => 'CMS-Benutzer',
        'logout' => 'Abmelden',
        'media-library' => 'Medien',
        'settings' => 'Einstellungen',
        'close-menu' => 'Menü schließen',
    ],
    'notifications' => [
        'reset' => [
            'action' => 'Passwort zurücksetzen',
            'content' => 'Sie erhalten diese E-Mail, weil das Zurücksetzen des Passworts angefordert wurde. Wenn Sie das Zurücksetzen des Passworts nicht angefordert haben, ist keine weitere Aktion erforderlich.',
            'subject' => ':appName | Passwort zurücksetzen',
        ],
        'welcome' => [
            'action' => 'Vergeben Sie Ihr Passwort',
            'content' => 'Sie erhalten diese E-Mail, weil ein Konto für :name für Sie erstellt wurde.',
            'title' => 'Willkommen',
            'subject' => ':appName | Willkommen',
        ],
    ],
    'overlay' => [
        'close' => 'Schließen',
    ],
    'previewer' => [
        'compare-view' => 'Vergleichs-Ansicht',
        'current-revision' => 'Aktuell',
        'editor' => 'Editor',
        'last-edit' => 'Zuletzt bearbeitet',
        'past-revision' => 'Vergangen',
        'restore' => 'Wiederherstellen',
        'revision-history' => 'Bearbeitungs-Verlauf',
        'single-view' => 'Einzel-Ansicht',
        'title' => 'Vorschau der Änderungen',
        'unsaved' => 'Vorschau mit ungespeicherten Änderungen',
        'drag-and-drop' => 'Inhalte aus der linken Navigation ziehen und hier ablegen',
    ],
    'publisher' => [
        'cancel' => 'Abbrechen',
        'current' => 'Aktuell',
        'end-date' => 'Enddatum',
        'immediate' => 'Sofort',
        'languages' => 'Sprachen',
        'languages-published' => 'Veröffentlicht',
        'last-edit' => 'Zuletzt bearbeitet',
        'preview' => 'Vorschau der Änderungen',
        'publish' => 'Veröffentlichen',
        'publish-close' => 'Veröffentlichen und schließen',
        'publish-new' => 'Veröffentlichen und neu erstellen',
        'published-on' => 'Veröffentlicht am',
        'restore-draft' => 'Als Entwurf wiederherstellen',
        'restore-draft-close' => 'Als Entwurf wiederherstellen und schließen',
        'restore-draft-new' => 'Als Entwurf wiederherstellen und weiteren erstellen',
        'restore-live' => 'Als veröffentlicht wiederherstellen',
        'restore-live-close' => 'Als veröffentlicht wiederherstellen und schließen',
        'restore-live-new' => 'Als veröffentlicht wiederherstellen und weiteren erstellen',
        'restore-message' => 'Sie bearbeiten eine ältere Version dieses Eintrags (gespeichert von :user am :date). Nehmen Sie bei Bedarf Änderungen vor und klicken Sie auf Wiederherstellen, um eine neue Version zu speichern.',
        'restore-success' => 'Revision wiederhergestellt',
        'revisions' => 'Revisionen',
        'save' => 'Als Entwurf speichern',
        'save-close' => 'Als Entwurf speichern und schließen',
        'save-new' => 'Als Entwurf speichern und neu erstellen',
        'save-success' => 'Inhalt gespeichert',
        'start-date' => 'Anfangsdatum',
        'switcher-title' => 'Status',
        'update' => 'Aktualisieren',
        'update-close' => 'Aktualisieren und schließen',
        'update-new' => 'Aktualisieren und neu erstellen',
        'parent-page' => 'Übergeordnete Seite',
        'review-status' => 'Review-Status',
        'visibility' => 'Sichtbarkeit',
    ],
    'select' => [
        'empty-text' => 'Leider keine passenden Optionen gefunden',
    ],
    'uploader' => [
        'dropzone-text' => 'oder neue Dateien hier ablegen',
        'upload-btn-label' => 'Neu hinzufügen',
    ],
    'user-management' => [
        '2fa' => '2-Faktor-Authentifizierung',
        '2fa-description' => 'Bitte scannen Sie diesen QR-Code mit Google Authenticator oder einer kompatiblen Anwendung und geben Sie vor dem Absenden Ihr Einmal-Passwort ein. Eine Liste der kompatiblen Anwendungen finden Sie <a href=":link" target="_blank" rel="noopener">hier</a>.',
        '2fa-disable' => 'Geben Sie Ihr Einmal-Passwort ein, um die 2-Faktor-Authentifizierung zu deaktivieren.',
        'active' => 'Aktiv',
        'cancel' => 'Abbrechen',
        'content-fieldset-label' => 'Benutzer-Einstellungen',
        'description' => 'Beschreibung',
        'disabled' => 'Deaktiviert',
        'edit-modal-title' => 'Benutzername bearbeiten',
        'email' => 'E-Mail',
        'enable-user' => 'Benutzer aktivieren',
        'enable-user-and-close' => 'Benutzer aktivieren und schließen',
        'enable-user-and-create-new' => 'Benutzer aktivieren und weiteren erstellen',
        'enabled' => 'Aktiviert',
        'language' => 'Sprache',
        'language-placeholder' => 'Sprache auswählen',
        'name' => 'Name',
        'otp' => 'Einmal-Passwort',
        'profile-image' => 'Profilbild',
        'role' => 'Rolle',
        'role-placeholder' => 'Rolle auswählen',
        'title' => 'Titel',
        'trash' => 'Papierkorb',
        'update' => 'Aktualisieren',
        'update-and-close' => 'Aktualisieren und schließen',
        'update-and-create-new' => 'Aktualisieren und weiteren erstellen',
        'update-disabled-and-close' => 'Deaktivierten aktualisieren und schließen',
        'update-disabled-user' => 'Deaktivierten Benutzer aktualisieren',
        'update-disabled-user-and-create-new' => 'Deaktivierten Benutzer aktualisieren und weiteren erstellen',
        'user-image' => 'Bild',
        'users' => 'Benutzer',
    ],
    'settings' => [
        'update' => 'Speichern',
        'cancel' => 'Abbrechen',
        'fieldset-label' => 'Einstellungen',
    ],
];
