import React, { useEffect, useState } from 'react';
import axios from 'axios';

function App() {
  const [data, setData] = useState([]);

  useEffect(() => {
    // ดึงข้อมูลจาก PHP API
    axios.get('http://localhost/php-api/index.php')
      .then((response) => {
        setData(response.data);
      })
      .catch((error) => {
        console.error('Error fetching data:', error);
      });
  }, []);

  return (
    <div className="App">
      <h1>Data from MySQL (via PHP API)</h1>
      <ul>
        {data.length > 0 ? (
          data.map((item) => (
            <li key={item.id}>
              <strong>Name:</strong> {item.name}, <strong>Age:</strong> {item.age}, <strong>Email:</strong> {item.email}
            </li>
          ))
        ) : (
          <li>No data available</li>
        )}
      </ul>
    </div>
  );
}

export default App;
