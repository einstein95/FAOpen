{% extends "cpanel.volt" %}

{% block content %}
    {% set title='Edit Group' %}

    <div class="container-item-top">
        <div class="back-link floatright"><a href="{{ url.routeFromHere(['action': 'index', 'id': null]) }}">&#x276e;&#x276e;&nbsp;Back to Folder Management</a></div>
        <h3>Edit Group</h3>
    </div>

    <div class="container-item-bot">
        {{ form.render() }}
    </div>
{% endblock %}