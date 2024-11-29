<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\AlumnoController;
use App\Models\Alumno;

class AlumnoControllerTestUnit extends TestCase
{
    public function testStoreAlumno()
    {
        // Simular los datos de entrada
        $data = [
            'nombre' => 'Juan Pérez',
            'edad' => 20,
        ];
        
        $alumno = new Alumno();
        $alumno->nombre = $data['nombre'];
        $alumno->edad = $data['edad'];
        
        // Asegurar que el objeto se instancia correctamente
        $this->assertEquals('Juan Pérez', $alumno->nombre);
        $this->assertIsNumeric($alumno->edad);
    }

    public function testAlumnoEdadInvalid()
    {
        $edad = -5; // Simular un dato no válido
        $this->assertFalse($edad > 0, "La edad no puede ser negativa");
    }

    public function testSameObjectReference()
    {
        $alumno1 = new Alumno();
        $alumno2 = $alumno1;

        // Validar que ambas variables apuntan al mismo objeto
        $this->assertSame($alumno1, $alumno2);
    }

    public function testAlumnoNumericField()
    {
        $alumno = new Alumno();
        $alumno->id = 12345; // Simular un ID numérico

        $this->assertIsNumeric($alumno->id, "El ID debe ser un valor numérico");
    }
}
