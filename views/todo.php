<?php
app\assets\AppAsset::register($this);
$this->title = "TODO APP by Tarasov Konstantin";
?>

<section id="todoapp">

    <header id="header">
        <h1>Сделать</h1>

        <section id="filter-block" style="display: block;">
            <ul id="filters"></ul>
        </section>

        <input id="new-todo" placeholder="Что мы сделаем завтра?" autofocus="">
    </header>

    <section id="main" style="display: block;">
        <ul id="todo-list"></ul>
    </section>

</section>

<script type="text/template" id="item-template">
    <div class="view">
        <input class="toggle" type="checkbox" <%= isCompleted ? 'checked' : '' %>>
        <label><%- title %></label>
        <button class="cancel"></button>
    </div>
    <input class="edit" value="<%- title %>">
</script>

<script type="text/template" id="stats-template">
    <ul id="filters">
        <li>
            <span class="label label-primary">
                <a class="selected" href="#/all">Все</a>
            </span>
        </li>
        <li>
            <span class="label label-warning">
                <a href="#/active">Активные</a>
            </span>
        </li>
        <li>
            <span class="label label-success">
                <a href="#/completed">Завершенные</a>
            </span>
        </li>
        <li>
            <span class="label label-danger">
                <a href="#/canceled">Отмененные</a>
            </span>
        </li>
    </ul>
</script>