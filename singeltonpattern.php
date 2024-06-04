// Allgemeine Singleton-Klasse.
class Singleton {
    private static $instance = null;

    // Der Konstruktor ist privat, um die direkte Erstellung von Objekten zu verhindern.
    private function __construct() {
        // Hier erfolgt der teure Prozess (z. B. Datenbankverbindung).
    }

    // Die einzige Möglichkeit, eine Instanz zu erstellen, ist die Verwendung einer statischen Methode.
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}

// Beispiel: Verwendung der Singleton-Klasse.
$object1 = Singleton::getInstance();
$object2 = Singleton::getInstance();
$object3 = Singleton::getInstance();
// Alle Variablen zeigen auf dasselbe Objekt.
