
namespace Owl\Router;

use Owl\Http\Request;

class Router implements RouterInterface
{
    protected basePath = "" {get, set};

    protected routers = [];

    public function add(string uri, array! parameters = [], string method = Request::GET)
    {
        var route;

        let route = new Route;
        let route->uri = uri;
        let route->method = method;
        let route->parameters = parameters;

        let this->routers[] = route;
    }

    public function addRoute(<Route> route)
    {
        let this->routers[] = route;
    }

    public function matchRequest(<Owl\Http\Request> request)
    {

    }

    public function match(string uri, string method = Request::GET) -> object|boolean
    {
        var router;

        for router in this->routers {
            if (router->uri == uri) {
                return router;
            }
        }

        return false;
    }
}