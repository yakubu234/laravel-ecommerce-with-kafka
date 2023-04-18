var HttpClient = function () {
    this.get = function (aUrl, token = null, aCallback) {
        var anHttpRequest = new XMLHttpRequest();
        anHttpRequest.onreadystatechange = function () {
            if (anHttpRequest.readyState == 4 && (anHttpRequest.status >= 200 && anHttpRequest.status <= 299))
                aCallback(JSON.parse(anHttpRequest.responseText));

            if (anHttpRequest.readyState == 4 && (anHttpRequest.status >= 400 && anHttpRequest.status <= 499))
                aCallback(JSON.parse(anHttpRequest.responseText));

            if (anHttpRequest.readyState == 4 && (anHttpRequest.status >= 500 && anHttpRequest.status <= 599))
                aCallback(JSON.parse(anHttpRequest.responseText));

        }

        anHttpRequest.open("GET", aUrl, true);
        // anHttpRequest.withCredentials = true;    
        anHttpRequest.setRequestHeader("X-Requested-With", "XMLHttpRequest");
        anHttpRequest.setRequestHeader("Content-Type", "application/json; charset=utf-8");
        // anHttpRequest.setRequestHeader('X-CSRF-TOKEN', cSrf);
        anHttpRequest.setRequestHeader('Access-Control-Allow-Origin', '*');
        anHttpRequest.setRequestHeader("Accept", "application/json");
        anHttpRequest.setRequestHeader('Authorization', 'Bearer ' + token);
        anHttpRequest.send(null);

    }
}

var HttpClientPost = function () {
    this.get = function (aUrl, data, token = null, aCallback) {
        var anHttpRequest = new XMLHttpRequest();
        anHttpRequest.onreadystatechange = function () {
            if (anHttpRequest.readyState == 4 && (anHttpRequest.status >= 200 && anHttpRequest.status <= 299))
                aCallback(JSON.parse(anHttpRequest.responseText));

            if (anHttpRequest.readyState == 4 && (anHttpRequest.status >= 400 && anHttpRequest.status <= 499))
                aCallback(JSON.parse(anHttpRequest.responseText));

            if (anHttpRequest.readyState == 4 && (anHttpRequest.status >= 500 && anHttpRequest.status <= 599))
                aCallback(JSON.parse(anHttpRequest.responseText));
        }

        anHttpRequest.open("POST", aUrl, true);
        anHttpRequest.setRequestHeader("X-Requested-With", "XMLHttpRequest");
        anHttpRequest.setRequestHeader("Content-Type", "application/json; charset=utf-8");
        // anHttpRequest.setRequestHeader('X-CSRF-TOKEN', cSrf);
        anHttpRequest.setRequestHeader('Access-Control-Allow-Origin', '*');
        anHttpRequest.setRequestHeader("Accept", "application/json");
        anHttpRequest.setRequestHeader('Authorization', 'Bearer ' + token);
        anHttpRequest.send(data);
    }
}
