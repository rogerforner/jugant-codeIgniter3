> Aprendiendo CodeIgniter 3

# MVC

## Controlador

> [Documentación](https://www.codeigniter.com/user_guide/general/controllers.html)

Los Controladores o _Controllers_ se encuentran en `/application/controllers`.

```php
// Evita que se cargue el php como una vista.
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
```

Devolver un texto plano.

```php
class Welcome extends CI_Controller {
  public function index()
	{
		echo 'Hola carambola!';
	}
}
```

Cargar una vista.

```php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  public function index()
	{
		$this->load->view('welcome_message');
	}
}
```

## Vista

> [Documentación](https://www.codeigniter.com/user_guide/general/views.html)

Las vistas o _Views_ se encuentran en `/application/views`.

A través del controlador llamamos las vistas, cuyas pueden estar en _php_ (por defecto) e incluso en _html_.

- **PHP**: CONTROLLER `$this->load->view('nombre_vista');` y VIEW `nombre_vista.php`.
- **HTML**: CONTROLLER `$this->load->view('nombre_vista.html');` y VIEW `nombre_vista.html`.