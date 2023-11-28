<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Task::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        $formfields = $request->validate([
            "title" => ["required", "min:6"],
            "description" => 'required|min:6',
        ]);

        $Task = Task::create($formfields);

        return response()->json(['message' => 'Task created successfully', 'content' => $Task]);

        // $validator = Validator::make($request->all(), [
        //     'text' => 'required',
        //     'body' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return ['response' => $validator->messages(), 'success' => false];
        // }

        // $item = new Item();
        // $item->text = $request->input('text');
        // $item->body = $request->input('body');
        // $item->save();

        // return response()->json($item);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($task)
    {
        return response()->json(Task::find($task));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $formfields = $request->validate([
            "title" => ["required", "min:6"],
            "description" => 'required|min:6',
        ]);

        $task->update($formfields);
        return response()->json(['message' => 'Task ' . $request['id'] . ' Updated successfully', 'content' => $task]);

        // $validator = Validator::make($request->all(), [
        //     'text' => 'required',
        //     'body' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     return ['response' => $validator->messages(), 'success' => false];
        // }

        // $item = Item::find($id);
        // $item->text = $request->input('text');
        // $item->body = $request->input('body');
        // $item->save();

        // return response()->json($item);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(['message' => 'Task ' . $task['id'] . ' deleted successfully', 'content' => $task]);
    }
}
