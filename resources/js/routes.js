import Error404 from './Core/components/404'
import EventsRoutes from './events/routes'
import WebsocketRoutes from './websockets/routes'
import WeightRoutes from './weight/routes'

let routes = [
    ...EventsRoutes,
    ...WebsocketRoutes,
    ...WeightRoutes,
    {
        path: '*',
        name: '404',
        component: Error404,
        meta: {
            title: '404 Page Not Found'
        }
    }
]

export default routes
