<?php
namespace App\Http\Controllers;
use App\Models\Employee; // Подключаем модель Employee
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;


class EmployeeController extends Controller
{
    // Метод для получения пути запроса
    protected function getPath(Request $request)
    {
        return $request->path();
    }

    // Метод для получения URL запроса
    protected function getUrl(Request $request)
    {
        return $request->url();
    }

    // Метод для получения списка сотрудников
    public function index()
    {
        $employees = User::all(); // Получите всех сотрудников или нужные данные
        return view('employees.index', compact('employees')); // Передайте переменную в представление
    }

    public function contacts()
    {
        $address = 'Беларусь, Гомель, ул. Белицкая, 23-109';
        $post_code = '246043';
        $email = 'kastett@mail.ru';
        $phone = '+375291586850';
        return view('layouts.contacts', compact('address', 'post_code', 'email', 'phone'));
    }

    public function destroy($id)
    {
    $employee = User::findOrFail($id); // Найдите сотрудника по ID
    $employee->delete(); // Удалите сотрудника
    return redirect()->route('employees.index')->with('success', 'Сотрудник успешно удалён.'); // Перенаправьте на индекс с сообщением
    }


    // Метод для создания нового сотрудника
    public function store(Request $request) {
        // Получаем путь и URL запроса
        $path = $this->getPath($request);
        $url = $this->getUrl($request);
        // Валидация входящих данных
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'workdata' => 'required|string',
        ]);

        // // Преобразование workdata из JSON в массив
        // $workdataArray = json_decode($validatedData['workdata'], true);

        // // Проверка на ошибки при декодировании JSON
        // if (json_last_error() !== JSON_ERROR_NONE) {
        //     return back()->withErrors(['workdata' => 'Неверный формат JSON']);
        // }

        // // Добавьте workdata в $validatedData, если необходимо
        // $validatedData['workdata'] = $workdataArray;

        User::create($validatedData);
        // Выводим путь и URL (или используйте по своему усмотрению)
        Log::info("Path: $path");
        Log::info("URL: $url");
        // Передаем данные в представление
        return view('employees.show', compact('validatedData'));
    }



    // Метод для отображения формы создания работника
    public function create()
    {
        return view('employees.create');
    }


    // Метод для отображения отдельного работника по ID
    public function show($id)
    {
        // Логика получения работника по ID (например, из базы данных)
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }


    public function update(Request $request, $id)
    {
        // Получаем путь и URL запроса
        $path = $this->getPath($request);
        $url = $this->getUrl($request);
        // Найдите работника по ID и обновите его данные
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        // Выводим путь и URL (или используйте по своему усмотрению)
        Log::info("Path: $path");
        Log::info("URL: $url");
        return redirect()->route('employees.index', $id)->with('success', 'Данные работника успешно обновлены!');
    }


    public function edit($id)
    {
        $employee = Employee::findOrFail($id); // Получите сотрудника по ID
        return view('employees.edit', compact('employee')); // Передайте сотрудника в представление
    }
}
