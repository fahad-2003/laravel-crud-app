<?php
namespace Tests\Unit;

use Tests\TestCase;
use Mockery;
use App\Models\Car;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarControllerTest extends TestCase
{
    use RefreshDatabase;

    // Test the car creation
    public function testCreateCar()
    {
        $user = User::factory()->create(); // Create a user
        $this->actingAs($user); // Act as the logged-in user

        // Create car data
        $carData = [
            'name' => 'Honda Accord',
            'color' => 'Blue',
            'company' => 'Honda',
        ];

        // Send post request to create car
        $response = $this->post(route('cars.store'), $carData);

        // Assert the car is stored and redirect to cars index
        $response->assertRedirect(route('cars.index'));
        $this->assertDatabaseHas('cars', $carData); // Assert the car data is in the database
    }

    // Test the car update
    public function testUpdateCar()
    {
        // Create a car and a user
        $car = Car::factory()->create();
        $user = User::factory()->create();
        $this->actingAs($user); // Act as the logged-in user

        // Update car data
        $updatedData = [
            'name' => 'Toyota Corolla',
            'color' => 'Red',
            'company' => 'Toyota',
        ];

        // Send put request to update car
        $response = $this->put(route('cars.update', $car), $updatedData);

        // Assert the car is updated and redirected to the cars index
        $response->assertRedirect(route('cars.index'));
        $this->assertDatabaseHas('cars', $updatedData); // Assert the updated data is in the database
    }

    // Test the car deletion
    public function testDestroyCar()
    {
        // Create a car and a user
        $car = Car::factory()->create();
        $user = User::factory()->create();
        $this->actingAs($user); // Act as the logged-in user

        // Send delete request to remove car
        $response = $this->delete(route('cars.destroy', $car));

        // Assert the car is deleted and redirected to cars index
        $response->assertRedirect(route('cars.index'));
        $this->assertDatabaseMissing('cars', ['id' => $car->id]); // Assert the car is deleted
    }

    // Test the car search functionality
    public function testCarSearch()
    {
        // Create a car and a user
        $car = Car::factory()->create();
        $user = User::factory()->create();
        $this->actingAs($user); // Act as the logged-in user

        // Send get request to search for cars
        $response = $this->get(route('cars.index', ['search' => $car->name]));

        // Assert the search results contain the car
        $response->assertSee($car->name);
    }
}
