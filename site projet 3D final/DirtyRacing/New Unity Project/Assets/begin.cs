using UnityEngine;
using UnityEngine.UI;

using System.Collections;

public class begin : MonoBehaviour
{

	public float timer;
	bool beginGame = false;
	Chrono chrono;
	public GUIStyle design;
	public int xpos;
	public int ypos;
	public GameObject myself;

	public Text begintext;


	void Start ()
	{
		chrono = myself.GetComponent<Chrono>();
		Physics.gravity = new Vector3(0, 0, 0);
	}

	void Update ()
	{
		if (timer > -1) {
			timer -= Time.deltaTime;
		}
		if (timer < 0 && beginGame == false) {
			beginGame = true;
			Physics.gravity = new Vector3(0, -20f, 0);
			chrono.my_start();
			begintext.gameObject.SetActive (false);
		}
	}

	void OnGUI()
	{
		if (timer > -0.5) {
			begintext.text = timer.ToString ("####0");
		
			/*GUI.Label (new Rect (xpos, ypos, xpos + 200, ypos), timer.ToString ("####0"), design);*/
		}
	}
}
