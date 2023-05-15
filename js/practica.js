function getUserInfo(userIds) {
    const promises = [];
  
    for (let i = 0; i < userIds.length; i++) {
      const userId = userIds[i];
      const promise = fetch(`https://api.example.com/users/${userId}`)
        .then(response => response.json())
        .then(data => ({ id: userId, name: data.name, email: data.email }))
        .catch(error => console.error(error));
      promises.push(promise);
    }
    const userIds = [1, 2, 3, 4, 5];
    getUserInfo(userIds)
      .then(userInfo => console.log(userInfo))
      .catch(error => console.error(error));
    
    return Promise.all(promises);
  }

  const userIds = [1, 2, 3, 4, 5];
getUserInfo(userIds)
  .then(userInfo => console.log(userInfo))
  .catch(error => console.error(error));
