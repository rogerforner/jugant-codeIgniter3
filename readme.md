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