import './App.css';

import { BrowserRouter as Router, Route, Switch } from 'react-router-dom'
import AdminIndex from './layouts/admin/AdminIndex';

function App() {
  return (
    <>
      <Router>
        <Switch>
          <Route exact path="/admin/dashboard" component={AdminIndex} />
        </Switch>
      </Router>
    </>
  );
}

export default App;
