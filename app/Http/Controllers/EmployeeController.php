<?php

namespace App\Http\Controllers;

use App\Models\Employee; // Подключаем модель Employee
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Метод для создания нового сотрудника
    public function store(Request $request)
    {
        // Валидация входящих данных
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'salary' => 'required|numeric',
        ]);

        // Создаем новый экземпляр модели Employee
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->position = $request->position;
        $employee->salary = $request->salary;

        // Сохраняем модель в базу данных
        $employee->save();

        return response()->json(['message' => 'Сотрудник успешно добавлен!'], 201);
    }

    // Метод для получения списка сотрудников
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }
}
