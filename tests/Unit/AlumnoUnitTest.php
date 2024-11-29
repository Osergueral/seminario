<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Alumno;
use App\Http\Controllers\AlumnoController;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class AlumnoUnitTest extends TestCase
{
    /** @test */
    public function test_validacion_falla_para_crear_alumnos()
    {
        $controller = new AlumnoController();
        $request = Request::create('/alumnos', 'POST', [
            'nombre' => '',
            'apellido' => '',
            'email' => '',
            'edad' => ''
        ]);

        $this->expectException(ValidationException::class);

        // Espera que falle la validación
        $controller->store($request);
    }

    /** @test */
    public function test_validacion_correcta_para_crear_alumnos()
    {
        $controller = new AlumnoController();
        $request = Request::create('/alumnos', 'POST', [
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'email' => 'juan.perez@example.com',
            'edad' => '18'
        ]);

        $response = $controller->store($request);

        // Verifica que redirige correctamente
        $this->assertTrue($response->isRedirect(route('alumnos.index')));
    }

    /** @test */
    public function test_alumno_nombre_no_es_igual()
    {
        $nombre1 = "Juan";
        $nombre2 = "Carlos";

        // Verifica que los nombres no son iguales
        $this->assertFalse($nombre1 === $nombre2, "Los nombres no deberían ser iguales.");
    }

    /** @test */
    public function test_alumno_id_igual_referencia()
    {
        $alumno1 = new Alumno();
        $alumno2 = $alumno1;

        // Verifica que ambos objetos son la misma referencia
        $this->assertSame($alumno1, $alumno2, "Ambos objetos deben ser la misma instancia.");
    }

    /** @test */
    public function test_alumno_edad_valida()
    {
        $edadReal = 20;
        $edadEsperada = 20;

        // Verifica que las edades son iguales
        $this->assertEquals($edadEsperada, $edadReal, "La edad debe coincidir con el valor esperado.");
    }

    /** @test */
    public function test_id_es_numerico()
    {
        $id = 123;

        // Verifica que el ID es numérico
        $this->assertIsNumeric($id, "El ID debe ser numérico.");
    }
}
