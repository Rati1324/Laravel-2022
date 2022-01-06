import React, { useState } from 'react';
import ReactDOM from 'react-dom';

class Form extends Component {
    render() {
        <form>
            <label for="email">Email:</label><br/>
            <input type="text" id="email" name="email"/><br/>
            <label for="password">Password:</label><br/>
            <input type="password" id="password" name="password"/><br/>
            <input type="submit" value="submit"/>
        </form>
    }
}

export default Form;

if (document.getElementById('login')) {
    ReactDOM.render(<Form />, document.getElementById('login'));
}